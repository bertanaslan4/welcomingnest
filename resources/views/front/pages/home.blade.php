@extends('front.layouts.app')
@section('content')
    <!--Sliders Section-->
    <section>

            <div class="container-fuild banner1 ">
                <!-- Carousel -->
                <div class="owl-carousel testimonial-owl-carousel2 slider ">
                    @foreach($sliders as $slider)
                        <div class="item">
                            <img alt="first slide " src="{{ asset($slider->image) }}" style="-webkit-mask-image: linear-gradient(black, transparent);
  mask-image: linear-gradient(black, transparent);min-width:1500px;max-height:595px;object-fit:contain"/>
                            <div class="header-text ">
                                <div class="col-md-6 offset-md-3 text-center text-black ">
                                    <h4>
                                        {{ $slider->translateOrDefault(session()->get('locale'))->description }}
                                    </h4>

                                </div>
                            </div>
                            <!-- /header-text -->
                        </div>
                    @endforeach

                </div>
            </div>

    </section>

    <!--/Sliders Section-->
    <!--Categories-->
{{--    <section class="sptb bg-white">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title center-block text-center">--}}
{{--                <h1>Categories</h1>--}}
{{--                <p>--}}
{{--                    Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur--}}
{{--                    vehicula--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h1.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Home &amp; Furniture<span>(45)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h2.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Apartments<span>(52)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h3.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Lands<span>(48)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h4.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Flots<span>(15)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card mb-xl-0">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h5.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Offices<span>(12)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card mb-xl-0">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h6.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Shops<span>(05)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card mb-sm-0">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h7.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Villas<span>(09)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                    <div class="card mb-0">--}}
{{--                        <div class="item-card">--}}
{{--                            <div class="item-card-desc">--}}
{{--                                <a href="#"></a>--}}
{{--                                <div class="item-card-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('asset/img/h8.png')}}"--}}
{{--                                        alt="img"--}}
{{--                                        class="br-te-7 br-ts-7"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="item-card-text">--}}
{{--                                    <h4 class="mb-0">Flot Area<span>(65)</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--/Categories-->
    <!--Feature Ads-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>
                @if(session()->get('locale') == 'tr')
                    Öne Çıkan İlanlar
                @elseif(session()->get('locale') == 'en')
                    Featured Adverts
                @elseif(session()->get('locale') == 'fn')
                        Esillä olevat mainokset
                @endif
                </h1>
            </div>
            <div id="myCarousel3" class="owl-carousel owl-carousel-icons2">
                <!-- Wrapper for carousel items -->
               @foreach($adverts as $advert)
                    <div class="item">
                        <div class="card mb-0">

                            <div class="item-card7-img">
                                <div class="item-card7-imgs">
                                    <a href="{{route('detail',$advert->id)}}"></a>
                                    <img src="{{asset($advert->thumbnail)}}" alt="img" class="cover-image" style="height:200px;object-fit:cover;display:block;margin:auto"  />
                                </div>
                                <div class="item-card7-overlaytext">
                                    <h4 class="font-weight-semibold mb-0">{{ optional($advert->translate(session()->get('locale')))->price ?? '999' }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="item-card7-desc">
                                    <a href="{{route('detail',$advert->id)}}" class="text-dark">
                                        <h4 class="font-weight-semibold">
                                            {{ \Illuminate\Support\Str::limit($advert->translate(session()->get('locale'))->title, 20, '...') }}
                                        </h4>
                                    </a>
                                </div>
                                <div class="item-card7-text">
                                    <ul class="icon-card mb-0">
                                        <li class="">
                                            <a href="#" class="icons">
                                                <i class="si si-location-pin text-muted me-1"></i>
                                               {{$advert->city->name}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="icons"
                                            ><i class="si si-event text-muted me-1"></i> {{$advert->created_at->format('d-m-Y')}}</a
                                            >
                                        </li>
                                        <li class="mb-0">
                                            <a href="#" class="icons"
                                            ><i class="si si-user text-muted me-1"></i>
                                            {{$advert->user->name}}
                                            </a
                                            >
                                        </li>

                                    </ul>
                                </div>
                            </div>
{{--                            <div class="card-footer">--}}
{{--                                <a href="#" class="me-2 me-md-4" title="Area"--}}
{{--                                ><i class="fa fa-arrows-alt text-muted"></i>--}}
{{--                                    <span class="text-default">256 sqft</span></a--}}
{{--                                >--}}
{{--                                <a href="#" class="me-2 me-md-4" title="BedRooms"--}}
{{--                                ><i class="fa fa-bed text-muted"></i>--}}
{{--                                    <span class="text-default">2</span></a--}}
{{--                                >--}}
{{--                                <a href="#" class="me-2 me-md-4" title="BathRooms"--}}
{{--                                ><i class="fa fa-bath text-muted"></i>--}}
{{--                                    <span class="text-default">2</span></a--}}
{{--                                >--}}
{{--                                <a href="#" class="" title="vehicle parking"--}}
{{--                                ><i class="fa fa-car text-muted"></i>--}}
{{--                                    <span class="text-default">1</span></a--}}
{{--                                >--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--/Feature Ads-->
    <!--Subscribe-->
    <section>
        <div
            class="about-1 cover-image sptb-2 bg-background-color"
            data-bs-image-src="../assets/images/banners/subscribe.jpg"
        >
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="mb-2">
                            @if(session()->get('locale') == 'tr')
                                Abone Ol
                            @elseif(session()->get('locale') == 'en')
                                Subscribe
                            @elseif(session()->get('locale') == 'fn')
                                Tilaa
                            @endif
                        </h1>

                        <div class="row">
                            <div class="col-lg-8 mx-auto d-block">
                                <div class="mt-5">
                                    <div class="input-group sub-input mt-1">
                                        <input
                                            type="text"
                                            class="form-control input-lg"
                                            placeholder="Enter your Email"
                                        />
                                        <div class="input-group-text border-0 bg-transparent p-0">
                                            <button
                                                type="button"
                                                class="btn btn-secondary btn-lg br-te-7 br-be-7"
                                            >
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Subscribe-->
    <!--New Projects-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>
                    @if(session()->get('locale') == 'tr')
                        En Yeni 10 İlan
                    @elseif(session()->get('locale') == 'en')
                       Top 10 Newest Adverts
                    @elseif(session()->get('locale') == 'fn')
                        Top 10 uusinta mainosta
                    @endif
                </h1>

            </div>
            <div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
                <!-- Wrapper for carousel items -->
                @foreach($adverts as $advert)
                    <div class="item">
                        <div class="card mb-0">
                            <div class="item-card7-img">
                                <div class="item-card7-imgs">
                                    <a href="{{route('detail',$advert->id)}}"></a>
                                    <img src="{{asset($advert->thumbnail)}}" alt="img" style="height:200px;object-fit:cover;display:block;margin:auto"  class="cover-image" />
                                </div>
                                <div class="item-card7-overlaytext">
                                    <h4 class="font-weight-semibold mb-0">{{ optional($advert->translate(session()->get('locale')))->price ?? '999' }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="item-card7-desc">
                                <a href="{{route('detail',$advert->id)}}" class="text-dark">
                                    <h4 class="font-weight-semibold">
                                        {{ \Illuminate\Support\Str::limit($advert->translate(session()->get('locale'))->title, 20, '...') }}
                                    </h4>
                                </a>
                                </div>
                                <div class="item-card7-text">
                                    <ul class="icon-card mb-0">
                                        <li class="">
                                            <a href="#" class="icons">
                                                <i class="si si-location-pin text-muted me-1"></i>
                                                {{$advert->city->name}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="icons"
                                            ><i class="si si-event text-muted me-1"></i> {{$advert->created_at->format('d-m-Y')}}</a
                                            >
                                        </li>
                                        <li class="mb-0">
                                            <a href="#" class="icons"
                                            ><i class="si si-user text-muted me-1"></i>
                                                {{$advert->user->name}}
                                            </a
                                            >
                                        </li>

                                    </ul>
                                </div>
                            </div>
{{--                            <div class="card-footer">--}}
{{--                                <a href="#" class="me-2 me-md-4" title="Area"--}}
{{--                                ><i class="fa fa-arrows-alt text-muted"></i>--}}
{{--                                    <span class="text-default">256 sqft</span></a--}}
{{--                                >--}}
{{--                                <a href="#" class="me-2 me-md-4" title="BedRooms"--}}
{{--                                ><i class="fa fa-bed text-muted"></i>--}}
{{--                                    <span class="text-default">2</span></a--}}
{{--                                >--}}
{{--                                <a href="#" class="me-2 me-md-4" title="BathRooms"--}}
{{--                                ><i class="fa fa-bath text-muted"></i>--}}
{{--                                    <span class="text-default">2</span></a--}}
{{--                                >--}}
{{--                                <a href="#" class="" title="vehicle parking"--}}
{{--                                ><i class="fa fa-car text-muted"></i>--}}
{{--                                    <span class="text-default">1</span></a--}}
{{--                                >--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/New Projects-->
    <!--Testimonials-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>
                    @if(session()->get('locale') == 'tr')
                        Yorumlar
                    @elseif(session()->get('locale') == 'en')
                        Testimonials
                    @elseif(session()->get('locale') == 'fn')
                        Suosittelut
                    @endif
                </h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        @foreach($comments as $comment)
                            <div class="item text-center">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <div class="testimonia-img mx-auto mb-3">
                                                <img
                                                    src="{{asset($comment->user->avatar)}}"
                                                    class="img-thumbnail rounded-circle"
                                                    style="max-height:100px"
                                                    alt=""
                                                />
                                            </div>
                                            <p>
                                                <i class="fa fa-quote-left"></i>
                                                {{$comment->translate(session()->get('locale'))->content}}
                                            </p>
                                            <div class="testimonia-data">
                                                <h4 class="fs-18 mb-1">{{$comment->user->name}}</h4>

                                                <span class="fs-14 ms-2">
                        {{$comment->stars}} <i class="fa fa-star text-yellow"></i
                                                    ></span>
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
    </section>
    <!--Testimonials-->
    <!--Blogs-->


{{--    <section class="sptb bg-white">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title center-block text-center">--}}
{{--                <h1>News</h1>--}}
{{--                <p>--}}
{{--                    Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur--}}
{{--                    vehicula--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                id="defaultCarousel"--}}
{{--                class="owl-carousel Card-owlcarousel owl-carousel-icons"--}}
{{--            >--}}
{{--                <div class="item">--}}
{{--                    <div class="card mb-0">--}}
{{--                        <div class="item7-card-img">--}}
{{--                            <a href="#"></a>--}}
{{--                            <img src="{{asset('asset/img/j2.jpg')}}" alt="img" class="cover-image" />--}}
{{--                        </div>--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="item7-card-desc d-flex mb-2">--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fa fa-calendar-o text-muted me-2"></i--}}
{{--                                    >Dec-03-2018</a--}}
{{--                                >--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a href="#"--}}
{{--                                    ><i class="fa fa-comment-o text-muted me-2"></i>4--}}
{{--                                        Comments</a--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="blog-details.html" class="text-dark"--}}
{{--                            ><h4 class="fs-20">Excepteur occaecat cupidatat</h4></a--}}
{{--                            >--}}
{{--                            <p>--}}
{{--                                Ut enim ad minima veniam, quis exercitationem, enim ad minima--}}
{{--                                veniam, quis nostrum exercitationem--}}
{{--                            </p>--}}
{{--                            <div class="d-flex align-items-center pt-2 mt-auto">--}}
{{--                                <img--}}
{{--                                    src="images/5_1.jpg"--}}
{{--                                    class="avatar brround avatar-md me-3"--}}
{{--                                    alt="avatar-img"--}}
{{--                                />--}}
{{--                                <div>--}}
{{--                                    <a href="profile-pages.html" class="text-default"--}}
{{--                                    >Joanne Nash</a--}}
{{--                                    >--}}
{{--                                    <small class="d-block text-muted">1 day ago</small>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto text-muted">--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fe fe-heart me-1"></i--}}
{{--                                        ></a>--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fa fa-thumbs-o-up"></i--}}
{{--                                        ></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div class="card mb-0">--}}
{{--                        <div class="item7-card-img">--}}
{{--                            <a href="#"></a>--}}
{{--                            <img src="{{asset('asset/img/j2.jpg')}}" alt="img" class="cover-image" />--}}
{{--                        </div>--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="item7-card-desc d-flex mb-2">--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fa fa-calendar-o text-muted me-2"></i--}}
{{--                                    >Nov-28-2018</a--}}
{{--                                >--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a href="#"--}}
{{--                                    ><i class="fa fa-comment-o text-muted me-2"></i>2--}}
{{--                                        Comments</a--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="blog-details.html" class="text-dark"--}}
{{--                            ><h4 class="fs-20">Sed ut perspiciatis unde iste</h4></a--}}
{{--                            >--}}
{{--                            <p>--}}
{{--                                Ut enim ad minima veniam, quis exercitationem, enim ad minima--}}
{{--                                veniam, quis nostrum exercitationem--}}
{{--                            </p>--}}
{{--                            <div class="d-flex align-items-center pt-2 mt-auto">--}}
{{--                                <img--}}
{{--                                    src="images/7.jpg"--}}
{{--                                    class="avatar brround avatar-md me-3"--}}
{{--                                    alt="avatar-img"--}}
{{--                                />--}}
{{--                                <div>--}}
{{--                                    <a href="profile-pages.html" class="text-default"--}}
{{--                                    >Tanner Mallari</a--}}
{{--                                    >--}}
{{--                                    <small class="d-block text-muted">2 days ago</small>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto text-muted">--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fe fe-heart me-1"></i--}}
{{--                                        ></a>--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fa fa-thumbs-o-up"></i--}}
{{--                                        ></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div class="card mb-0">--}}
{{--                        <div class="item7-card-img">--}}
{{--                            <a href="#"></a>--}}
{{--                            <img src="{{asset('asset/img/j2.jpg')}}" alt="img" class="cover-image" />--}}
{{--                        </div>--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="item7-card-desc d-flex mb-2">--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fa fa-calendar-o text-muted me-2"></i--}}
{{--                                    >Nov-19-2018</a--}}
{{--                                >--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a href="#"--}}
{{--                                    ><i class="fa fa-comment-o text-muted me-2"></i>8--}}
{{--                                        Comments</a--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="blog-details.html" class="text-dark"--}}
{{--                            ><h4 class="fs-20">At vero eos et accusamus et iusto</h4></a--}}
{{--                            >--}}
{{--                            <p>--}}
{{--                                Ut enim ad minima veniam, quis exercitationem, enim ad minima--}}
{{--                                veniam, quis nostrum exercitationem--}}
{{--                            </p>--}}
{{--                            <div class="d-flex align-items-center pt-2 mt-auto">--}}
{{--                                <img--}}
{{--                                    src="images/15.jpg"--}}
{{--                                    class="avatar brround avatar-md me-3"--}}
{{--                                    alt="avatar-img"--}}
{{--                                />--}}
{{--                                <div>--}}
{{--                                    <a href="profile-pages.html" class="text-default"--}}
{{--                                    >Aracely Bashore</a--}}
{{--                                    >--}}
{{--                                    <small class="d-block text-muted">5 days ago</small>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto text-muted">--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fe fe-heart me-1"></i--}}
{{--                                        ></a>--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fa fa-thumbs-o-up"></i--}}
{{--                                        ></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div class="card mb-0">--}}
{{--                        <div class="item7-card-img">--}}
{{--                            <a href="#"></a>--}}
{{--                            <img src="{{asset('asset/img/j2.jpg')}}" alt="img" class="cover-image" />--}}
{{--                        </div>--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="item7-card-desc d-flex mb-2">--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fa fa-calendar-o text-muted me-2"></i--}}
{{--                                    >Dec-03-2018</a--}}
{{--                                >--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a href="#"--}}
{{--                                    ><i class="fa fa-comment-o text-muted me-2"></i>4--}}
{{--                                        Comments</a--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="blog-details.html" class="text-dark"--}}
{{--                            ><h4 class="font-weight-semibold">--}}
{{--                                    Excepteur occaecat cupidatat--}}
{{--                                </h4></a--}}
{{--                            >--}}
{{--                            <p>--}}
{{--                                Ut enim ad minima veniam, quis exercitationem, enim ad minima--}}
{{--                                veniam, quis nostrum exercitationem--}}
{{--                            </p>--}}
{{--                            <div class="d-flex align-items-center pt-2 mt-auto">--}}
{{--                                <img--}}
{{--                                    src="images/15_1.jpg"--}}
{{--                                    class="avatar brround avatar-md me-3"--}}
{{--                                    alt="avatar-img"--}}
{{--                                />--}}
{{--                                <div>--}}
{{--                                    <a href="profile-pages.html" class="text-default"--}}
{{--                                    >Royal Hamblin</a--}}
{{--                                    >--}}
{{--                                    <small class="d-block text-muted">10 days ago</small>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto text-muted">--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fe fe-heart me-1"></i--}}
{{--                                        ></a>--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fa fa-thumbs-o-up"></i--}}
{{--                                        ></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div class="card mb-0">--}}
{{--                        <div class="item7-card-img">--}}
{{--                            <a href="#"></a>--}}
{{--                            <img src="{{asset('asset/img/j2.jpg')}}" alt="img" class="cover-image" />--}}
{{--                        </div>--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="item7-card-desc d-flex mb-2">--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fa fa-calendar-o text-muted me-2"></i--}}
{{--                                    >Nov-28-2018</a--}}
{{--                                >--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a href="#"--}}
{{--                                    ><i class="fa fa-comment-o text-muted me-2"></i>2--}}
{{--                                        Comments</a--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="blog-details.html" class="text-dark"--}}
{{--                            ><h4 class="font-weight-semibold">--}}
{{--                                    Sed ut perspiciatis unde omnis iste--}}
{{--                                </h4></a--}}
{{--                            >--}}
{{--                            <p>--}}
{{--                                Ut enim ad minima veniam, quis exercitationem, enim ad minima--}}
{{--                                veniam, quis nostrum exercitationem--}}
{{--                            </p>--}}
{{--                            <div class="d-flex align-items-center pt-2 mt-auto">--}}
{{--                                <img--}}
{{--                                    src="images/5.jpg"--}}
{{--                                    class="avatar brround avatar-md me-3"--}}
{{--                                    alt="avatar-img"--}}
{{--                                />--}}
{{--                                <div>--}}
{{--                                    <a href="profile-pages.html" class="text-default"--}}
{{--                                    >Rosita Chatmon</a--}}
{{--                                    >--}}
{{--                                    <small class="d-block text-muted">10 days ago</small>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto text-muted">--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fe fe-heart me-1"></i--}}
{{--                                        ></a>--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fa fa-thumbs-o-up"></i--}}
{{--                                        ></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div class="card mb-0">--}}
{{--                        <div class="item7-card-img">--}}
{{--                            <a href="#"></a>--}}
{{--                            <img src="{{asset('asset/img/j2.jpg')}}" alt="img" class="cover-image" />--}}
{{--                        </div>--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="item7-card-desc d-flex mb-2">--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fa fa-calendar-o text-muted me-2"></i--}}
{{--                                    >Nov-19-2018</a--}}
{{--                                >--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a href="#"--}}
{{--                                    ><i class="fa fa-comment-o text-muted me-2"></i>8--}}
{{--                                        Comments</a--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="blog-details.html" class="text-dark"--}}
{{--                            ><h4 class="font-weight-semibold">--}}
{{--                                    At vero eos et accusamus et iusto--}}
{{--                                </h4></a--}}
{{--                            >--}}
{{--                            <p>--}}
{{--                                Ut enim ad minima veniam, quis exercitationem, enim ad minima--}}
{{--                                veniam, quis nostrum exercitationem--}}
{{--                            </p>--}}
{{--                            <div class="d-flex align-items-center pt-2 mt-auto">--}}
{{--                                <img--}}
{{--                                    src="images/6.jpg"--}}
{{--                                    class="avatar brround avatar-md me-3"--}}
{{--                                    alt="avatar-img"--}}
{{--                                />--}}
{{--                                <div>--}}
{{--                                    <a href="profile-pages.html" class="text-default"--}}
{{--                                    >Loyd Nolf</a--}}
{{--                                    >--}}
{{--                                    <small class="d-block text-muted">15 days ago</small>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto text-muted">--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fe fe-heart me-1"></i--}}
{{--                                        ></a>--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="icon d-none d-md-inline-block ms-3"--}}
{{--                                    ><i class="fa fa-thumbs-o-up"></i--}}
{{--                                        ></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <!--/Blogs-->

@endsection
