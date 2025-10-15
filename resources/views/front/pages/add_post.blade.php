@extends('front.layouts.app')
@section('content')
    <!--Sliders Section-->
    <section>
        <div
            class="bannerimg cover-image bg-background3"
            data-bs-image-src="../assets/images/banners/banner2.jpg"
        >
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1>
                            @if(session()->get('locale') == 'tr')
                                İlan Ekle
                            @elseif(session()->get('locale') == 'en')
                                Add Post
                            @elseif(session()->get('locale') == 'fn')
                                Lisää viesti
                            @endif
                          </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->
    <!--Add posts-section-->
    <section class="sptb">
        <div class="container">
            <form method="post" action="{{route('ad.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">@if(session()->get('locale') == 'tr')
                                        İlan Ekle
                                    @elseif(session()->get('locale') == 'en')
                                        Add Post
                                    @elseif(session()->get('locale') == 'fn')
                                        Lisää viesti
                                    @endif</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label text-dark">@if(session()->get('locale') == 'tr')
                                            Başlık
                                        @elseif(session()->get('locale') == 'en')
                                            Title
                                        @elseif(session()->get('locale') == 'fn')
                                            Otsikko
                                        @endif</label>
                                    <input type="text" name="title" class="form-control" placeholder="" required/>
                                </div>
                                <div class="control-group form-group">
                                    <div class="input-group file-browser">
                                        <input class="form-control" name="thumbnail" type="file" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark">
                                                @if(session()->get('locale') == 'tr')
                                                    Ülke
                                                @elseif(session()->get('locale') == 'en')
                                                    Country
                                                @elseif(session()->get('locale') == 'fn')
                                                    Maa
                                                @endif
                                            </label>
                                            <select class="form-control single1" id="country" required>

                                                <!-- Dynamic Country Options -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark">
                                                @if(session()->get('locale') == 'tr')
                                                    Şehir
                                                @elseif(session()->get('locale') == 'en')
                                                    State
                                                @elseif(session()->get('locale') == 'fn')
                                                    Valtio
                                                @endif
                                            </label>
                                            <select class="form-control single2" id="state" required>

                                                <!-- Dynamic State Options -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark">
                                                @if(session()->get('locale') == 'tr')
                                                    Bölge
                                                @elseif(session()->get('locale') == 'en')
                                                    City
                                                @elseif(session()->get('locale') == 'fn')
                                                    Kaupunki
                                                @endif
                                            </label>
                                            <select class="form-control single3" name="city" id="city" required>

                                                <!-- Dynamic City Options -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">
                                        @if(session()->get('locale') == 'tr')
                                            Açıklama
                                        @elseif(session()->get('locale') == 'en')
                                            Description
                                        @elseif(session()->get('locale') == 'fn')
                                            Kuvaus
                                        @endif
                                    </label>
                                    <textarea
                                        class="form-control"
                                        name="description"
                                        rows="6"
                                        placeholder="text here.."
                                        required
                                    ></textarea>
                                </div>
                                <div class="form-group row clearfix d-flex">
                                    @foreach($props as $prop)
                                        <div class="col-4">
                                            <div class="checkbox checkbox-info">
                                                <label class="custom-control mt-4 mb-0 form-checkbox">
                                                    <input type="checkbox" name="properties[]"
                                                           value="{{ $prop->id }}" class="custom-control-input" />
                                                    <span class="custom-control-label text-dark ps-2"
                                                    >{{$prop->translateOrDefault(session()->get('locale'))->name}}</span>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">
                                        @if(session()->get('locale') == 'tr')
                                            Adres
                                        @elseif(session()->get('locale') == 'en')
                                            Address
                                        @elseif(session()->get('locale') == 'fn')
                                            Osoite
                                        @endif
                                    </label>
                                    <textarea
                                        class="form-control"
                                        name="address"
                                        rows="2"
                                        placeholder="address here.."
                                    ></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">
                                        @if(session()->get('locale') == 'tr')
                                            Fiyat
                                        @elseif(session()->get('locale') == 'en')
                                            Price
                                        @elseif(session()->get('locale') == 'fn')
                                            Hinta
                                        @endif
                                    </label>
                                    <input type="text" name="price" class="form-control" required  />
                                </div>

                                <div class="control-group form-group">
                                    <div class="input-group file-browser">
                                        <input class="form-control" name="images[]" multiple type="file"/>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
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
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--/Add posts-section-->


    <script>
        $(document).ready(function() {
            $('.single1').select2();
            $('.single2').select2();
            $('.single3').select2();


            // Load countries on page load
            $.get('/countries', function(data) {
                $('#country').append('<option value="0">Select Country</option>');
                $.each(data, function(index, country) {
                    $('#country').append('<option value="' + country.id + '">' + country.name + '</option>');
                });
            });

            // Load states when a country is selected
            $('#country').change(function() {
                var country_id = $(this).val();
                $('#state').empty();
                $('#city').empty();
                if (country_id != 0) {
                    $.get('/states/' + country_id, function(data) {
                        $('#state').append('<option value="0">Select State</option>');
                        $.each(data, function(index, state) {
                            $('#state').append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                    });
                }
            });

            // Load cities when a state is selected
            $('#state').change(function() {
                var state_id = $(this).val();
                $('#city').empty();
                if (state_id != 0) {
                    $.get('/cities/' + state_id, function(data) {
                        $('#city').append('<option value="0">Select City</option>');
                        $.each(data, function(index, city) {
                            $('#city').append('<option value="' + city.id + '">' + city.name + '</option>');
                        });
                    });
                }
            });


        });
    </script>
@endsection
