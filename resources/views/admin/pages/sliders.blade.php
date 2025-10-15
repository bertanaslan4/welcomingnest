@extends('admin.layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row mb-12 g-6">
            @foreach($sliders as $slider)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{asset($slider->image)}}" alt="Card image cap" />
                        <div class="card-body">
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit($slider->translate('tr')->description, 100, '...') }}
                            </p>
                            <a href="{{route('admin.edit-slider',$slider->id)}}" class="btn btn-outline-warning">Düzenle</a>
                            <a href="{{route('admin.delete-slider',$slider->id)}}" class="btn btn-outline-danger">Sil</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- / Content -->

@endsection
