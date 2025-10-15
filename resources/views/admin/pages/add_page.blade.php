@extends('admin.layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <form method="post" action="{{route('admin.store-page')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-6">
                        <h5 class="card-header">Sayfa Ekle</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="tr_title" class="form-control" id="floatingInput" placeholder="Türkçe" aria-describedby="floatingInputHelp"  required/>
                                        <label for="floatingInput">Türkçe Başlık</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="en_title" class="form-control" id="floatingInput" placeholder="İngilizce" aria-describedby="floatingInputHelp" required />
                                        <label for="floatingInput">İngilizce Başlık</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="fn_title" class="form-control" id="floatingInput" placeholder="Fince" aria-describedby="floatingInputHelp" required />
                                        <label for="floatingInput">Fince Başlık</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="tr_content" id="tr_content">
                            <input type="hidden" name="en_content" id="en_content">
                            <input type="hidden" name="fn_content" id="fn_content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-6">
                                        <h5 class="card-header">Türkçe</h5>
                                        <div class="card-body">
                                            <div id="snow-toolbar-1">
                                                    <span class="ql-formats">
                                                        <select class="ql-font"></select>
                                                        <select class="ql-size"></select>
                                                      </span>
                                                <span class="ql-formats">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-strike"></button>
                                                    </span>

                                                <span class="ql-formats">
                                                        <select class="ql-color"></select>
                                                        <select class="ql-background"></select>
                                                      </span>

                                                <span class="ql-formats">
                                                        <button class="ql-script" value="sub"></button>
                                                        <button class="ql-script" value="super"></button>
                                                      </span>

                                                <span class="ql-formats">
                                                        <button class="ql-header" value="1"></button>
                                                        <button class="ql-header" value="2"></button>
                                                        <button class="ql-blockquote"></button>
                                                        <button class="ql-code-block"></button>
                                                      </span>
                                            </div>
                                            <div id="snow-editor-1">
                                                Türkçe İçerik
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card mb-6">
                                        <h5 class="card-header">İngilizce</h5>
                                        <div class="card-body">
                                            <div id="snow-toolbar-2">
                                                    <span class="ql-formats">
                                                        <select class="ql-font"></select>
                                                        <select class="ql-size"></select>
                                                      </span>
                                                <span class="ql-formats">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-strike"></button>
                                                    </span>

                                                <span class="ql-formats">
                                                        <select class="ql-color"></select>
                                                        <select class="ql-background"></select>
                                                      </span>

                                                <span class="ql-formats">
                                                        <button class="ql-script" value="sub"></button>
                                                        <button class="ql-script" value="super"></button>
                                                      </span>

                                                <span class="ql-formats">
                                                        <button class="ql-header" value="1"></button>
                                                        <button class="ql-header" value="2"></button>
                                                        <button class="ql-blockquote"></button>
                                                        <button class="ql-code-block"></button>
                                                      </span>
                                            </div>
                                            <div id="snow-editor-2">
                                                İngilizce İçerik
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card mb-6">
                                        <h5 class="card-header">Fince</h5>
                                        <div class="card-body">
                                            <div id="snow-toolbar-3">
                                                    <span class="ql-formats">
                                                        <select class="ql-font"></select>
                                                        <select class="ql-size"></select>
                                                      </span>
                                                <span class="ql-formats">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-strike"></button>
                                                    </span>

                                                <span class="ql-formats">
                                                        <select class="ql-color"></select>
                                                        <select class="ql-background"></select>
                                                      </span>

                                                <span class="ql-formats">
                                                        <button class="ql-script" value="sub"></button>
                                                        <button class="ql-script" value="super"></button>
                                                      </span>

                                                <span class="ql-formats">
                                                        <button class="ql-header" value="1"></button>
                                                        <button class="ql-header" value="2"></button>
                                                        <button class="ql-blockquote"></button>
                                                        <button class="ql-code-block"></button>
                                                      </span>
                                            </div>
                                            <div id="snow-editor-3">
                                                Fince İçerik
                                            </div>
                                        </div>
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
