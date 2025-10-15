@extends('admin.layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-6">
                    <h5 class="card-header">Slider Düzenle</h5>
                    <form method="post" action="{{route('admin.update-slider',$slider->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Slider Banner</label>
                                <input class="form-control" name="image" type="file" id="formFile" onchange="previewImage(event)">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline mb-6">
                                        <textarea class="form-control h-px-300" name="tr" id="exampleFormControlTextarea1" required>
                                        {{ optional($slider->translate('tr'))->description ?? '' }}
                                        </textarea>
                                        <label for="exampleFormControlTextarea1">Türkçe</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline mb-6">
                                        <textarea class="form-control h-px-300" name="en" id="exampleFormControlTextarea1" placeholder="Content here..." required>
                                        {{ optional($slider->translate('en'))->description ?? '' }}
                                        </textarea>
                                        <label for="exampleFormControlTextarea1">İngilizce</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline mb-6">
                                        <textarea class="form-control h-px-300" name="fn" id="exampleFormControlTextarea1" placeholder="Content here..." required>
                                           {{ optional($slider->translate('fn'))->description ?? '' }}
                                        </textarea>
                                        <label for="exampleFormControlTextarea1">Fince</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="d-grid gap-2 col-lg-6 mx-auto">
                                    <button  class="btn btn-secondary btn-lg" type="submit">Düzenle</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card h-100 py-4">
                        <img id="preview" class="d-block mx-auto" src="{{asset($slider->image)}}" style="width:50%" alt="Card image cap" />
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
