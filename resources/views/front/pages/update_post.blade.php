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
                                Düzenle
                            @elseif(session()->get('locale') == 'en')
                                Edit
                            @elseif(session()->get('locale') == 'fn')
                                Muokkaa
                            @endif
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->

    <!--Update posts-section-->
    <section class="sptb">
        <div class="container">
            <form method="post" action="{{ route('ad.update', $advert->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Update Post</h3>
                            </div>
                            <div class="mx-auto">
                                    <img src="{{asset($advert->thumbnail)}}" style="max-height:300px" alt="img"/>
                            </div>

                            <div class="card-body">
                                <div class="control-group form-group">
                                    <label class="form-label text-dark">@if(session()->get('locale') == 'tr')
                                            Ana Resim
                                        @elseif(session()->get('locale') == 'en')
                                            Main Image
                                        @elseif(session()->get('locale') == 'fn')
                                            Pääkuva
                                        @endif</label>
                                    <div class="input-group file-browser">
                                        <input class="form-control" name="thumbnail" type="file" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">
                                        @if(session()->get('locale') == 'tr')
                                            Başlık
                                        @elseif(session()->get('locale') == 'en')
                                            Title
                                        @elseif(session()->get('locale') == 'fn')
                                            Otsikko
                                        @endif
                                    </label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title', $advert->translateOrDefault(session()->get('locale'))->title ?? '..') }}" placeholder="Enter Ad Title" />
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark">@if(session()->get('locale') == 'tr')
                                                    Ülke
                                                @elseif(session()->get('locale') == 'en')
                                                    Country
                                                @elseif(session()->get('locale') == 'fn')
                                                    Maa
                                                @endif</label>
                                            <select class="form-control select2" id="country">
                                                <option value="0">Select Country</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}" {{ $country->id == $advert->city->state->country->id ? 'selected' : '' }}>
                                                        {{ $country->name }}
                                                    </option>
                                                @endforeach
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
                                            <select class="form-control select2" id="state">
                                                <option value="0">Select State</option>

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
                                            <select class="form-control select2" name="city" id="city">
                                                <option value="0">Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label text-dark">@if(session()->get('locale') == 'tr')
                                            Açıklama
                                        @elseif(session()->get('locale') == 'en')
                                            Description
                                        @elseif(session()->get('locale') == 'fn')
                                            Kuvaus
                                        @endif</label>
                                    <textarea class="form-control" name="description" rows="6" placeholder="Enter description">{{ old('description', $advert->translateOrDefault(session()->get('locale'))->description ?? '..') }}</textarea>
                                </div>

                                <div class="form-group row clearfix d-flex">
                                    @php
                                        // JSON string'ini diziye dönüştür
                                        $selectedProperties = json_decode($advert->properties, true) ?? [];
                                    @endphp
                                    @foreach($props as $prop)
                                        <div class="col-4">
                                            <div class="checkbox checkbox-info">
                                                <label class="custom-control mt-4 mb-0 form-checkbox">
                                                    <input type="checkbox" name="properties[]"
                                                           value="{{ $prop->id }}" class="custom-control-input"
                                                        {{ in_array($prop->id, $selectedProperties) ? 'checked' : '' }} />
                                                    <span class="custom-control-label text-dark ps-2">
                                                        {{ $prop->translateOrDefault(session()->get('locale'))->name }}
                                                    </span>
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
                                    <textarea class="form-control" name="address" rows="2" placeholder="Enter address">{{ old('address', $advert->address) }}</textarea>
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
                                    <input type="text" name="price" class="form-control" value="{{$advert->translate(session()->get('locale'))->price}}" required  />
                                </div>

                                <div class="control-group form-group">
                                    <label class="form-label text-dark">
                                        @if(session()->get('locale') == 'tr')
                                            Resim Ekle
                                        @elseif(session()->get('locale') == 'en')
                                            Add Image
                                        @elseif(session()->get('locale') == 'fn')
                                            Lisää kuva
                                        @endif
                                    </label>
                                    <div class="input-group file-browser">
                                        <input class="form-control" name="images[]" multiple type="file"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">
                                        @if(session()->get('locale') == 'tr')
                                            İlan Resimleri
                                        @elseif(session()->get('locale') == 'en')
                                            Advert Images
                                        @elseif(session()->get('locale') == 'fn')
                                            Ilmoituksen Kuvat
                                        @endif
                                    </label>
                                    <div class="row">
                                        @foreach($advert->images as $image)
                                            <div class="col-2 position-relative" id="image-{{ $image->id }}">
                                                <img src="{{ asset($image->path) }}" alt="Advert Image" class="img-fluid" />
                                                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0"
                                                        onclick="deleteImage({{ $advert->id }}, {{ $image->id }})">
                                                    X
                                                </button>
                                            </div>
                                        @endforeach
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
    <!--/Update posts-section-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteImage(advertId, imageId) {
            // Önce kullanıcıya onay sor
            Swal.fire({
                @if(session()->get('locale') == 'tr')
                    title: 'Emin misiniz?',
                    text: 'Resmi silmek istediğinizden emin misiniz?',
                @elseif(session()->get('locale') == 'en')
                    title: 'Are you sure?',
                    text: 'Are you sure you want to delete the image?',
                @elseif(session()->get('locale') == 'fn')
                    title: 'Oletko varma ?',
                    text: 'Haluatko var varmasti poistaa kuvan?',
                @endif
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                @if(session()->get('locale') == 'tr')
                    confirmButtonText: 'Evet, sil',
                    cancelButtonText: 'İptal',
                @elseif(session()->get('locale') == 'en')
                    confirmButtonText: 'Yes, delete it',
                    cancelButtonText: 'Cancel',
                @elseif(session()->get('locale') == 'fn')
                    confirmButtonText: 'Kyllä, poista se',
                    cancelButtonText: 'Peruuta',
                @endif
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/adverts/${advertId}/images/${imageId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                document.getElementById(`image-${imageId}`).remove();
                                @if(session()->get('locale') == 'tr')
                                    Swal.fire(
                                    'Başarılı!',
                                    'Resim başarıyla silindi.',
                                    'success'
                                );
                                @elseif(session()->get('locale') == 'en')
                                    Swal.fire(
                                    'Success!',
                                    'Image deleted successfully.',
                                    'success'
                                );
                                @elseif(session()->get('locale') == 'fn')
                                    Swal.fire(
                                    'Onnistunut!',
                                    'Kuva poistettu onnistuneesti.',
                                    'success'
                                );
                                @endif
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the image.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire(
                                'Error!',
                                'An unexpected error occurred.',
                                'error'
                            );
                        });
                }
            });
        }
    </script>


    <script>
        $(document).ready(function() {
            // Load states and cities when page loads (for edit)
            var selectedCountry = "{{ $advert->city->state->country->id }}";
            var selectedState = "{{ $advert->city->state->id }}";
            var selectedCity = "{{ $advert->city_id }}";

            // Load states when a country is selected (and on page load)
            function loadStates(country_id, selected_state = null) {
                $('#state').empty();
                $('#city').empty();
                if (country_id != 0) {
                    $.get('/states/' + country_id, function(data) {
                        $('#state').append('<option value="0">Select State</option>');
                        $.each(data, function(index, state) {
                            $('#state').append('<option value="' + state.id + '" ' + (state.id == selected_state ? 'selected' : '') + '>' + state.name + '</option>');
                        });
                    });
                }
            }

            // Load cities when a state is selected (and on page load)
            function loadCities(state_id, selected_city = null) {
                $('#city').empty();
                if (state_id != 0) {
                    $.get('/cities/' + state_id, function(data) {
                        $('#city').append('<option value="0">Select City</option>');
                        $.each(data, function(index, city) {
                            $('#city').append('<option value="' + city.id + '" ' + (city.id == selected_city ? 'selected' : '') + '>' + city.name + '</option>');
                        });
                    });
                }
            }

            // Load the states and cities on page load
            loadStates(selectedCountry, selectedState);
            loadCities(selectedState, selectedCity);

            // Load states when country is changed
            $('#country').change(function() {
                var country_id = $(this).val();
                loadStates(country_id);
            });

            // Load cities when state is changed
            $('#state').change(function() {
                var state_id = $(this).val();
                loadCities(state_id);
            });
        });
    </script>

@endsection
