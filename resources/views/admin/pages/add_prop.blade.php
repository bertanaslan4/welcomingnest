@extends('admin.layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <form method="post" action="{{route('admin.store-prop')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-6">
                        <h5 class="card-header">Özellik Ekle</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="tr" class="form-control" id="floatingInput" placeholder="Türkçe" aria-describedby="floatingInputHelp"  required/>
                                        <label for="floatingInput">Türkçe</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="en" class="form-control" id="floatingInput" placeholder="İngilizce" aria-describedby="floatingInputHelp" required />
                                        <label for="floatingInput">İngilizce</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="fn" class="form-control" id="floatingInput" placeholder="Fince" aria-describedby="floatingInputHelp" required />
                                        <label for="floatingInput">Fince</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <div class="d-grid gap-2 col-lg-6 mx-auto">
                                    <button  class="btn btn-secondary btn-lg" type="submit">Ekle</button>
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
