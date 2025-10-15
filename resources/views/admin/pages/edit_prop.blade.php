@extends('admin.layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <form method="post" action="{{route('admin.update-prop',$prop->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-6">
                        <h5 class="card-header">Özellik Düzenle</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input required type="text" name="tr" class="form-control" id="floatingInput" value="{{ optional($prop->translate('tr'))->name ?? '..' }}" aria-describedby="floatingInputHelp" />
                                        <label for="floatingInput">Türkçe</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input required type="text" name="en" class="form-control" id="floatingInput" value="{{ optional($prop->translate('en'))->name ?? '..' }}" aria-describedby="floatingInputHelp" />
                                        <label for="floatingInput">İngilizce</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input required type="text" name="fn" class="form-control" id="floatingInput" value="{{ optional($prop->translate('fn'))->name ?? '..' }}" aria-describedby="floatingInputHelp" />
                                        <label for="floatingInput">Fince</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <div class="d-grid gap-2 col-lg-6 mx-auto">
                                    <button  class="btn btn-secondary btn-lg" type="submit">Düzenle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>
    <!-- / Content -->
@endsection
