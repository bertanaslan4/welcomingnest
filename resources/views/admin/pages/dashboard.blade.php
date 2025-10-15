@extends('admin.layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row g-6">


            <!-- Statistics Total Order -->
            <div class="col-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-primary rounded-3">
                                    <i class="ri-shopping-cart-2-line ri-24px"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-info mt-5">
                            <h5 class="mb-1">{{$userCount}}</h5>
                            <p>Kullanıcı Sayısı</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-primary rounded-3">
                                    <i class="ri-shopping-cart-2-line ri-24px"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-info mt-5">
                            <h5 class="mb-1">{{$advertCount}}</h5>
                            <p>İlan Sayısı</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-primary rounded-3">
                                    <i class="ri-shopping-cart-2-line ri-24px"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-info mt-5">
                            <h5 class="mb-1">{{$commentCount}}</h5>
                            <p>Yorum Sayısı</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-primary rounded-3">
                                    <i class="ri-shopping-cart-2-line ri-24px"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-info mt-5">
                            <h5 class="mb-1">{{$sikayetCount}}</h5>
                            <p>Şikayet Sayısı</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Total Order -->


            <!-- Total Transactions & Report Chart -->
            <div class="col-12 col-xxl-12">
                <div class="card">
                    <h5 class="card-header">Son 10 Yorum</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Kullanıcı</th>
                                <th>Yorum</th>
                                <th>İlan ID</th>
                                <th>Aksiyon</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{$comment->user->name}}</td>
                                    <td>
                                        @foreach($comment->translations as $translation)
                                            <p><strong>{{ strtoupper($translation->locale) }}:</strong> {{ $translation->content }}</p>
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($comment->advert)
                                            <a>{{$comment->advert->id}}</a>
                                        @else
                                            <span>Genel Yorum</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="ri-more-2-line"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('admin.main-comment',$comment->id)}}"><i class="ri-pencil-line me-1"></i> Ana Sayfaya Koy</a>
                                                <a class="dropdown-item" href="{{route('admin.delete-comment',$comment->id)}}"><i class="ri-delete-bin-7-line me-1"></i> Sil</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Total Transactions & Report Chart -->

            <div class="col-12 col-xxl-12">
                <div class="card">
                    <h5 class="card-header">Son 10 Kullanıcı</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Adı</th>
                                <th>E-Mail</th>
                                <th>Aksiyon</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($users as $user)
                                <tr>
                                    <td class=""><img src="{{asset($user->avatar)}}" alt="Avatar" class="avatar avatar-xs rounded-circle"></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="ri-more-2-line"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('admin.delete-user',$user->id)}}"><i class="ri-delete-bin-7-line me-1"></i> Sil</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xxl-12">
                <div class="card">
                    <h5 class="card-header">Sikayet</h5>
                    @if($sikayetCount == 0)
                        <div class="card-body">
                            <div class="alert alert-primary" role="alert">
                                <h4 class="alert-heading">Sikayet Bulunamadı!</h4>
                                <p>Henüz hiçbir kullanıcıdan şikayet alınmamıştır.</p>
                            </div>
                        </div>
                        @else
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Kullanıcı</th>
                                    <th>Başlık</th>
                                    <th>İlan ID</th>
                                    <th>Aksiyon</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach($sikayetler as $sikayet)
                                    <tr>
                                        <td>{{$sikayet->user->name}}</td>
                                        <td>
                                            @foreach($sikayet->translations as $translation)
                                                <p><strong>{{ strtoupper($translation->locale) }}:</strong> {{ $translation->title }}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{route('detail',$sikayet->id)}}">{{$sikayet->id}}</a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="ri-more-2-line"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('admin.delete-advert',$sikayet->id)}}"><i class="ri-delete-bin-7-line me-1"></i> Sil</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Activity Timeline -->
        </div>

    </div>
    <!-- / Content -->





@endsection
