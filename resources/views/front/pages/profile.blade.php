@extends('front.layouts.app')
@section('content')

    <!--Breadcrumb-->
    <section>
        <div
            class="bannerimg cover-image bg-background3"
            data-bs-image-src="../assets/images/banners/banner2.jpg"
        >
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">
                            @if(session()->get('locale') == 'tr')
                                Kullanıcı Profili
                            @elseif(session()->get('locale') == 'en')
                                User Profile
                            @elseif(session()->get('locale') == 'fn')
                                Käyttäjän profiili
                            @endif
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->
    <!--User Profile-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="wideget-user">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="wideget-user-desc text-start">
                                            <div class="wideget-user-img">
                                                <img class="brround" src="{{asset($user->avatar)}}" style="max-height:100px" alt="img" />
                                            </div>
                                            <div class="user-wrap wideget-user-info">
                                                <a href="#" class="text-dark"
                                                ><h4 class="font-weight-semibold">
                                                        {{$user->name}}
                                                    </h4></a
                                                >
                                                <h6 class="text-muted mb-3">
                                                    <span class="text-dark">
                                                        @if(session()->get('locale') == 'tr')
                                                            Kayıt Tarihi
                                                        @elseif(session()->get('locale') == 'en')
                                                            Registration Date
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Rekisteröintipäivä
                                                        @endif
                                                        : </span>
                                                    {{$user->created_at->format('d M Y')}}
                                                </h6>
{{--                                                <div class="wideget-user-rating">--}}
{{--                                                    <a href="#"--}}
{{--                                                    ><i class="fa fa-star text-warning"></i--}}
{{--                                                        ></a>--}}
{{--                                                    <a href="#"--}}
{{--                                                    ><i class="fa fa-star text-warning"></i--}}
{{--                                                        ></a>--}}
{{--                                                    <a href="#"--}}
{{--                                                    ><i class="fa fa-star text-warning"></i--}}
{{--                                                        ></a>--}}
{{--                                                    <a href="#"--}}
{{--                                                    ><i class="fa fa-star text-warning"></i--}}
{{--                                                        ></a>--}}
{{--                                                    <a href="#"--}}
{{--                                                    ><i class="fa fa-star-o text-warning me-1"></i--}}
{{--                                                        ></a>--}}
{{--                                                    <span>5 (3876 Reviews)</span>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="wideget-user-tab">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <ul class="nav">
                                            <li class="">
                                                <a href="#tab-5" class="active" data-bs-toggle="tab"
                                                >
                                                    @if(session()->get('locale') == 'tr')
                                                        Profil
                                                    @elseif(session()->get('locale') == 'en')
                                                        Profile
                                                    @elseif(session()->get('locale') == 'fn')
                                                        Profiili
                                                    @endif
                                                </a
                                                >
                                            </li>
                                            <li>
                                                <a href="#tab-6" data-bs-toggle="tab" class=""
                                                >
                                                    @if(session()->get('locale') == 'tr')
                                                        Profil Düzenle
                                                    @elseif(session()->get('locale') == 'en')
                                                        Edit Profle
                                                    @elseif(session()->get('locale') == 'fn')
                                                        Muokkaa Profle
                                                    @endif
                                                </a
                                                >
                                            </li>
                                            <li>
                                                <a href="#tab-7" data-bs-toggle="tab" class=""
                                                >
                                                    @if(session()->get('locale') == 'tr')
                                                        İlanlar
                                                    @elseif(session()->get('locale') == 'en')
                                                        Adverts
                                                    @elseif(session()->get('locale') == 'fn')
                                                        Mainokset
                                                    @endif
                                                    <span class="badge bg-primary rounded-pill"
                                                    >{{count($adverts)}}</span
                                                    ></a
                                                >
                                            </li>
                                            <li>
                                                <a href="{{route('delete-user',$user->id)}}" class="delete-user"
                                                   data-id="{{$user->id}}" data-confirm-text="@if(session()->get('locale') == 'tr') Kullanıcıyı silmek istediğinizden emin misiniz? @elseif(session()->get('locale') == 'en') Are you sure you want to delete this user? @elseif(session()->get('locale') == 'fn') Oletko varma, että haluat poistaa tämän käyttäjän? @endif"
                                                >
                                                    @if(session()->get('locale') == 'tr')
                                                        Kullanıcı Sil
                                                    @elseif(session()->get('locale') == 'en')
                                                        Delete User
                                                    @elseif(session()->get('locale') == 'fn')
                                                        Poista käyttäjä
                                                    @endif
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-5">
                                        <div class="profile-log-switch">
                                            <div class="media-heading">
                                                <h3 class="card-title mb-3 font-weight-bold">
                                                    @if(session()->get('locale') == 'tr')
                                                        Bilgiler
                                                    @elseif(session()->get('locale') == 'en')
                                                        Details
                                                    @elseif(session()->get('locale') == 'fn')
                                                        Yksityiskohdat
                                                    @endif
                                                </h3>
                                            </div>
                                            <ul class="mb-0">
                                                <li>
                                                    <a href="#" class="text-dark"
                                                    ><span class="font-weight-semibold"
                                                        >
                                                             @if(session()->get('locale') == 'tr')
                                                                İsim
                                                            @elseif(session()->get('locale') == 'en')
                                                                Name
                                                            @elseif(session()->get('locale') == 'fn')
                                                                Nimi
                                                            @endif:</span
                                                        >
                                                        {{$user->name}}</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#" class="text-dark"
                                                    ><span class="font-weight-semibold">Email :</span>
                                                        {{$user->email}}</a
                                                    >
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-6">
                                        <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">@if(session()->get('locale') == 'tr')
                                                                İsim
                                                            @elseif(session()->get('locale') == 'en')
                                                                Name
                                                            @elseif(session()->get('locale') == 'fn')
                                                                Nimi
                                                            @endif</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="name"
                                                            value="{{$user->name}}"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                            name="email"
                                                            value="{{$user->email}}"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="control-group form-group">
                                                    <div class="input-group file-browser">
                                                        <input class="form-control" name="avatar" type="file"  />
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary">
                                                        @if(session()->get('locale') == 'tr')
                                                            Gönder
                                                        @elseif(session()->get('locale') == 'en')
                                                            Submit
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Lähetä
                                                        @endif
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane userprof-tab" id="tab-7">
                                        <div class="table-responsive border-top">
                                            <table
                                                class="table table-bordered table-hover mb-0 text-nowrap"
                                            >
                                                <thead>
                                                <tr>
                                                    <th>
                                                        @if(session()->get('locale') == 'tr')
                                                            Başlık
                                                        @elseif(session()->get('locale') == 'en')
                                                            Title
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Otsikko
                                                        @endif
                                                    </th>
                                                    <th>
                                                        @if(session()->get('locale') == 'tr')
                                                            Özellikler
                                                        @elseif(session()->get('locale') == 'en')
                                                            Properties
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Ominaisuudet
                                                        @endif
                                                    </th>
                                                    <th>
                                                        @if(session()->get('locale') == 'tr')
                                                            Fiyat
                                                        @elseif(session()->get('locale') == 'en')
                                                            Price
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Hinta
                                                        @endif
                                                    </th>
                                                    <th>
                                                        @if(session()->get('locale') == 'tr')
                                                            Durum
                                                        @elseif(session()->get('locale') == 'en')
                                                            Status
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Tila
                                                        @endif
                                                    </th>
                                                    <th>
                                                        @if(session()->get('locale') == 'tr')
                                                            Aksiyonlar
                                                        @elseif(session()->get('locale') == 'en')
                                                            Action
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Toiminta
                                                        @endif
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($adverts as $advert)
                                                    @php
                                                        $advertTranslation = $advert->translate(session()->get('locale')) ?? $advert->translate('en');
                                                    @endphp
                                                    <tr>
                                                        <td>
                                                            <div class="media mt-0 mb-0">
                                                                <div class="card-aside-img">
                                                                    <a href="#"></a>
                                                                    <img src="{{asset($advert->thumbnail)}}" alt="img" />
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                                        <a href="#" class="text-dark">
                                                                            <h4 class="font-weight-semibold">
                                                                                {{ $advertTranslation ? $advertTranslation->title : 'Title not available in this Language' }}
                                                                            </h4>
                                                                        </a>
                                                                        <a href="#">
                                                                            <i class="fa fa-clock-o me-1"></i>
                                                                            {{$advert->created_at->format('d m Y')}}
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            @php
                                                                $propertyIds = json_decode($advert->properties, true);
                                                                $properties = \App\Models\Properties::whereIn('id', $propertyIds)->get();
                                                            @endphp
                                                            @foreach($properties as $property)
                                                                <span class="badge bg-primary rounded-pill">
                                                                    {{$property->translateOrDefault(session()->get('locale'))->name}}
                                                                </span>
                                                            @endforeach
                                                        </td>
                                                        <td class="font-weight-semibold fs-16"> {{ $advertTranslation ? $advertTranslation->price : 'Price not available in this Language' }}</td>
                                                        <td>
                                                            <a href="#" class="badge badge-warning"
                                                            >Published</a
                                                            >
                                                        </td>
                                                        <td>
                                                            <a
                                                                class="btn btn-success btn-sm text-white"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-original-title="Edit"
                                                                href="{{route('ad.edit', $advert->id)}}"
                                                            ><i class="fa fa-pencil"></i
                                                                ></a>
                                                            <a
                                                                class="btn btn-danger btn-sm text-white"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-original-title="Delete"
                                                                href="{{route('ad.delete', $advert->id)}}"
                                                            ><i class="fa fa-trash-o"></i
                                                                ></a>
                                                            <a
                                                                class="btn btn-primary btn-sm text-white"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-original-title="View"
                                                                href="{{route('detail', $advert->id)}}"
                                                            ><i class="fa fa-eye"></i
                                                                ></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tüm silme linklerine event listener ekleyelim
            document.querySelectorAll('.delete-user').forEach(function (element) {
                element.addEventListener('click', function (event) {
                    event.preventDefault();
                    var url = this.getAttribute('href');
                    var confirmText = this.getAttribute('data-confirm-text');

                    // SweetAlert kullanarak onay penceresi gösterelim
                    Swal.fire({
                        title: 'Are you sure?',
                        text: confirmText,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '@if(session()->get('locale') == 'tr') Evet, Sil! @elseif(session()->get('locale') == 'en') Yes, Delete! @elseif(session()->get('locale') == 'fn') Kyllä, poista! @endif',
                        cancelButtonText: '@if(session()->get('locale') == 'tr') İptal @elseif(session()->get('locale') == 'en') Cancel @elseif(session()->get('locale') == 'fn') Peruuta @endif',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Eğer kullanıcı onay verdiyse, silme linkine yönlendir
                            window.location.href = url;
                        }
                    });
                });
            });
        });
    </script>

@endsection
