

<div>
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">

                        @if(session()->get('locale') == 'tr')
                            Filtreleme Aracı
                        @elseif(session()->get('locale') == 'en')
                            Filter Adverts
                        @elseif(session()->get('locale') == 'fn')
                            Suodata mainoksia
                        @endif
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="country">
                            @if(session()->get('locale') == 'tr')
                                Ülke
                            @elseif(session()->get('locale') == 'en')
                                Country
                            @elseif(session()->get('locale') == 'fn')
                                Maa
                            @endif
                        </label>
                        <select wire:model.live="selectedCountry" id="country" class="form-control single1">
                            <option value="">
                                @if(session()->get('locale') == 'tr')
                                    Ülke Seçiniz
                                @elseif(session()->get('locale') == 'en')
                                    Select Country
                                @elseif(session()->get('locale') == 'fn')
                                    Valitse maa
                                @endif
                            </option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">
                            @if(session()->get('locale') == 'tr')
                                Şehir
                            @elseif(session()->get('locale') == 'en')
                                State
                            @elseif(session()->get('locale') == 'fn')
                                Osavaltio
                            @endif
                        </label>
                        <select wire:model.live="selectedState" id="state" class="form-control single2">
                            <option value="">
                                @if(session()->get('locale') == 'tr')
                                    Şehir Seçiniz
                                @elseif(session()->get('locale') == 'en')
                                    Select State
                                @elseif(session()->get('locale') == 'fn')
                                    Valitse osavaltio
                                @endif
                            </option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">
                            @if(session()->get('locale') == 'tr')
                                Bölge
                            @elseif(session()->get('locale') == 'en')
                                City
                            @elseif(session()->get('locale') == 'fn')
                                Kaupunki
                            @endif
                        </label>
                        <select wire:model.live="selectedCity" id="city" class="form-control single3">
                            <option value="">
                                @if(session()->get('locale') == 'tr')
                                    Bölge Seçiniz
                                @elseif(session()->get('locale') == 'en')
                                    Select City
                                @elseif(session()->get('locale') == 'fn')
                                    Valitse kaupunki
                                @endif
                            </option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-secondary btn-block" wire:click.prevent="filterAdverts">

                        @if(session()->get('locale') == 'tr')
                            Uygula
                        @elseif(session()->get('locale') == 'en')
                            Apply Filter
                        @elseif(session()->get('locale') == 'fn')
                            Käytä suodatinta
                        @endif
                    </a>
                </div>
            </div>

        </div>
        <div class="col-xl-9 col-lg-8 col-md-12">
            <div class="card mb-lg-0">
                <div class="card-body">
                    <div class="item2-gl">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-12">
                                <div class="row">
                                    @foreach($adverts as $advert)
                                        <div class="col-lg-6 col-md-6 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
{{--                                                    <div class="arrow-ribbon bg-primary">Rent</div>--}}
                                                    <div class="item-card9-imgs">
                                                        <a href="{{route('detail',$advert->id)}}"></a>
                                                        <img src="{{ $advert->thumbnail }}" alt="img" class="cover-image" />
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="#" class="item-card9-icons1 wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a href="{{route('detail',$advert->id)}}" class="text-dark mt-2">
                                                            <h4 class="font-weight-semibold mt-1" title="{{ $advert->translate(session()->get('locale'))->title }}">
                                                                {{ \Illuminate\Support\Str::limit($advert->translate(session()->get('locale'))->title, 30, '...') }}
                                                            </h4>
                                                        </a>
                                                        <p title="{{ $advert->translate(session()->get('locale'))->description}}">
                                                            {{ \Illuminate\Support\Str::limit($advert->translate(session()->get('locale'))->description, 100, '...') }}
                                                        </p>
                                                        <div class="item-card9-desc">
                                                            <a href="#" class="me-4">
                            <span class="">
                                <i class="fa fa-map-marker text-muted me-1"></i>{{ $advert->city->state->country->name }}
                            </span>
                                                            </a>
                                                            <a href="{{route('detail',$advert->id)}}" class="">
                            <span class="">
                                <i class="fa fa-calendar-o text-muted me-1"></i> {{ $advert->created_at->format('d M Y') }}
                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-semibold mb-0 mt-0">
                                                                {{ $advert->price }}
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="block">
                                                                <div class="rating-star sm my-rating-5" data-stars="4s"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="center-block text-center">--}}
{{--                        <ul class="pagination mb-0">--}}
{{--                            <li class="page-item page-prev disabled">--}}
{{--                                <a class="page-link" href="#" tabindex="-1">Prev</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active">--}}
{{--                                <a class="page-link" href="#">1</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#">2</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#">3</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item page-next">--}}
{{--                                <a class="page-link" href="#">Next</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>


    </div>

</div>
