@extends('admin.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Sayfalar</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Türkçe</th>
                        <th>İngilizce</th>
                        <th>Fince</th>
                        <th>Aksiyon</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($pages as $page)
                        <tr>
                            <td>{{ optional($page->translate('tr'))->title ?? '..' }}</td>
                            <td>{{ optional($page->translate('en'))->title ?? '..' }}</td>
                            <td>{{ optional($page->translate('fn'))->title ?? '..' }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ri-more-2-line"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('admin.edit-page',$page->id)}}"><i class="ri-pencil-line me-1"></i> Düzenle</a>
                                        <a class="dropdown-item" href="{{route('admin.delete-page',$page->id)}}"><i class="ri-delete-bin-7-line me-1"></i> Sil</a>
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
@endsection
