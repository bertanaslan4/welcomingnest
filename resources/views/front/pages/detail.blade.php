@extends('front.layouts.app')
@section('content')
    <!--Add listing-->
    @php
        $advertTranslation = $advert->translate(session()->get('locale')) ?? $advert->translate('en');
    @endphp
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <!--Right Side Section-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                @if(session()->get('locale') == 'tr')
                                    Yayınlayan
                                @elseif(session()->get('locale') == 'en')
                                    Posted by
                                @elseif(session()->get('locale') == 'fn')
                                    Lähettäjä
                                @endif
                            </h3>
                        </div>
                        <div class="card-body item-user">
                            <div class="profile-pic mb-0">
                                <img
                                    src="{{asset($advert->user->avatar)}}"
                                    class="brround avatar-xxl"
                                    alt="user"
                                />
                                <div class="">
                                    <a href="#" class="text-dark"
                                    ><h4 class="mt-3 mb-1 font-weight-semibold">
                                            {{$advert->user->name}}
                                        </h4></a
                                    >

                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">
                                @if(session()->get('locale') == 'tr')
                                    Kullanıcı Bilgileri
                                @elseif(session()->get('locale') == 'en')
                                    Contact Info
                                @elseif(session()->get('locale') == 'fn')
                                    Yhteystiedot
                                @endif
                            </h4>
                            <div>
                                <h6>
                    <span class="font-weight-semibold"
                    ><i class="fa fa-envelope me-2 mb-2"></i></span
                    ><a href="#" class="text-body"> {{$advert->user->email}}</a>
                                </h6>


                            </div>
{{--                            <div class="item-user-icons mt-4">--}}
{{--                                <a href="#" class="facebook-bg mt-0"--}}
{{--                                ><i class="fa fa-facebook"></i--}}
{{--                                    ></a>--}}
{{--                                <a href="#" class="twitter-bg"--}}
{{--                                ><i class="fa fa-twitter"></i--}}
{{--                                    ></a>--}}
{{--                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>--}}
{{--                                <a href="#" class="dribbble-bg"--}}
{{--                                ><i class="fa fa-dribbble"></i--}}
{{--                                    ></a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="card-footer">
                            <div class="text-start">
                                @if($advert->user->id != auth()->id())
                                    <a href="/chatify/{{$advert->user->id}}" class="btn btn-primary">Chat</a>
                                    <a href="{{route('complaint',$advert->id)}}" class="btn btn-danger">
                                        @if(session()->get('locale') == 'tr')
                                            Şikayet Et
                                        @elseif(session()->get('locale') == 'en')
                                            Report
                                        @elseif(session()->get('locale') == 'fn')
                                            Valittaa
                                        @endif
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>

                    <!--Related Posts-->
{{--                    <div class="card mb-lg-0">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">Related Posts</h3>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div--}}
{{--                                id="myCarousel4"--}}
{{--                                class="owl-carousel testimonial-owl-carousel2"--}}
{{--                            >--}}
{{--                                <!-- Wrapper for carousel items -->--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="arrow-ribbon bg-danger">sale</div>--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h1.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$389</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">Apartments</h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="ribbon ribbon-top-left text-success">--}}
{{--                                            <span class="bg-success">Collection</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h2.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$854</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">Lands</h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="arrow-ribbon bg-purple">Rent</div>--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h3.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$786</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">Villas</h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="arrow-ribbon bg-primary">Sale</div>--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h4.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$539</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">Rentals</h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="ribbon ribbon-top-left text-primary">--}}
{{--                                            <span class="bg-primary">featured</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h5.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$925</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">--}}
{{--                                                        Apartments Sales--}}
{{--                                                    </h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="arrow-ribbon bg-info">Rent</div>--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h3.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$925</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">--}}
{{--                                                        Villas Sales--}}
{{--                                                    </h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="arrow-ribbon bg-primary">sale</div>--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h1.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$378</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">--}}
{{--                                                        Multifamily Houses--}}
{{--                                                    </h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card mb-0">--}}
{{--                                        <div class="item-card7-img">--}}
{{--                                            <div class="item-card7-imgs">--}}
{{--                                                <a href="realestate.html"></a>--}}
{{--                                                <img--}}
{{--                                                    src="images/h2.jpg"--}}
{{--                                                    alt="img"--}}
{{--                                                    class="cover-image"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-overlaytext">--}}
{{--                                                <a href="realestate.html" class="text-white">--}}
{{--                                                    Real Estate</a--}}
{{--                                                >--}}
{{--                                                <h4 class="font-weight-semibold mb-0">$836</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="item-card7-desc">--}}
{{--                                                <a href="realestate.html" class="text-dark"--}}
{{--                                                ><h4 class="font-weight-semibold">--}}
{{--                                                        Commercial Properties--}}
{{--                                                    </h4></a--}}
{{--                                                >--}}
{{--                                            </div>--}}
{{--                                            <div class="item-card7-text">--}}
{{--                                                <ul class="icon-card mb-0">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i--}}
{{--                                                                class="si si-location-pin text-muted me-1"--}}
{{--                                                            ></i>--}}
{{--                                                            Los Angles</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-event text-muted me-1"></i> 5--}}
{{--                                                            hours ago</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-user text-muted me-1"></i>--}}
{{--                                                            Sally Peake</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                    <li class="mb-0">--}}
{{--                                                        <a href="#" class="icons"--}}
{{--                                                        ><i class="si si-phone text-muted me-1"></i>--}}
{{--                                                            5-67987608</a--}}
{{--                                                        >--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="ribbon ribbon-top-right text-danger">
                            <span class="bg-danger">featured</span>
                        </div>
                        <div class="card-body h-100 primo-slider">
                            <div class="item-det mb-4">
                                <a href="#" class="text-dark"
                                ><h3 class="">
                                        {{ $advertTranslation ? $advertTranslation->title : 'Title not available' }}
                                    </h3></a
                                >
                                <div class="d-flex">
                                    <ul class="d-flex mb-0">
                                        <li class="me-5">
                                            <a href="#" class="icons"
                                            ><i class="si si-briefcase text-muted me-1"></i> {{$advert->city->state->country->name}}</a
                                            >
                                        </li>
                                        <li class="me-5">
                                            <a href="#" class="icons"
                                            ><i class="si si-location-pin text-muted me-1"></i
                                                >{{$advert->city->state->name}}</a
                                            >
                                        </li>
                                        <li class="me-5">
                                            <a href="#" class="icons"
                                            ><i class="si si-location-pin text-muted me-1"></i
                                                >{{$advert->city->name}}</a
                                            >
                                        </li>
{{--                                        <li class="me-5">--}}
{{--                                            <a href="#" class="icons"--}}
{{--                                            ><i class="si si-eye text-muted me-1"></i> 765</a--}}
{{--                                            >--}}
{{--                                        </li>--}}
                                    </ul>
{{--                                    <div class="d-flex me-5">--}}
{{--                                        <div--}}
{{--                                            class="rating-star sm my-rating-5 me-2"--}}
{{--                                            data-stars="4s"--}}
{{--                                        ></div>--}}
{{--                                        4.0--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="me-2">--}}
{{--                                            <div class="">--}}
{{--                                                <i class="fa fa-heart text-danger"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        135--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="product-slider carousel-slide-2">
                                <div
                                    id="carouselFade"
                                    class="carousel slide carousel-fade"
                                    data-bs-ride="carousel"
                                    data-bs-loop="false"
                                    data-bs-thumb="true"
                                >
                                    <div class="arrow-ribbon2 bg-primary">{{$advert->translateOrDefault(session()->get('locale'))->price ?? '999'}}</div>
                                    <div
                                        class="carousel-inner slide-show-image"
                                        id="full-gallery"
                                    >
                                        <div class="carousel-item active">
                                            <img src="{{asset($advert->thumbnail)}}" alt="img" />
                                        </div>
                                        @foreach($adimage as $image)
                                            <div class="carousel-item">
                                                <img src="{{asset($image->path)}}" alt="img" />
                                            </div>
                                        @endforeach


                                        <div class="thumbcarousel">
                                            <a
                                                class="carousel-control-prev"
                                                href="#carouselFade"
                                                role="button"
                                                data-bs-slide="prev"
                                            >
                                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                            </a>
                                            <a
                                                class="carousel-control-next"
                                                href="#carouselFade"
                                                role="button"
                                                data-bs-slide="next"
                                            >
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
{{--                                        <div class="slider-wrap">--}}
{{--                                            <div class="slider">--}}
{{--                                                <div class="slider-inner carousel-indicators" style="transform: translateX(-334px);">--}}
{{--                                                    <div data-bs-target="#carouselFade" data-bs-slide-to="0" data-bs-active-id="next" class="thumb item">--}}
{{--                                                        <img src="{{asset($advert->image)}}"  alt="img">--}}
{{--                                                    </div>--}}
{{--                                                    <div data-bs-target="#carouselFade" data-bs-slide-to="1" data-bs-active-id="next" class="thumb item">--}}
{{--                                                        <img src="{{asset($advert->image)}}"  alt="img">--}}
{{--                                                    </div>--}}
{{--                                                    <div data-bs-target="#carouselFade" data-bs-slide-to="2" data-bs-active-id="next" class="thumb item">--}}
{{--                                                        <img src="{{asset($advert->image)}}"  alt="img">--}}
{{--                                                    </div>--}}
{{--                                                    <div data-bs-target="#carouselFade" data-bs-slide-to="3" data-bs-active-id="next" class="thumb item">--}}
{{--                                                        <img src="{{asset($advert->image)}}"  alt="img">--}}
{{--                                                    </div>--}}
{{--                                                    <div data-bs-target="#carouselFade" data-bs-slide-to="4" data-bs-active-id="next" class="thumb item">--}}
{{--                                                        <img src="{{asset($advert->image)}}"  alt="img">--}}
{{--                                                    </div>--}}

{{--                                                    --}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <a class="thumb-carousel-control-prev">--}}
{{--                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="primoslider-icon primoslider-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></i>--}}
{{--                                            </a>--}}
{{--                                            <a class="thumb-carousel-control-next btn-disabled"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="primoslider-icon primoslider-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Description-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@if(session()->get('locale') == 'tr')
                                    Açıklama
                                @elseif(session()->get('locale') == 'en')
                                    Description
                                @elseif(session()->get('locale') == 'fn')
                                    Kuvaus
                                @endif</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <p>
                                    {{ $advertTranslation ? $advertTranslation->description : 'Description not available' }}
                                </p>

                            </div>
                            <h4 class="mb-4">
                                @if(session()->get('locale') == 'tr')
                                    Özellikler
                                @elseif(session()->get('locale') == 'en')
                                    Properties
                                @elseif(session()->get('locale') == 'fn')
                                    Ominaisuudet
                                @endif
                            </h4>
                            <div class="row">

                                <div class="col-xl-6 col-md-12">
                                    <ul class="list-unstyled widget-spec mb-0">
                                        @php
                                            $propertyIds = json_decode($advert->properties, true);
                                            $properties = \App\Models\Properties::whereIn('id', $propertyIds)->get();
                                        @endphp
                                        @foreach($properties as $property)
                                            <li class="">
                                                <i class="fa fa-check text-muted w-5"></i> {{$property->translateOrDefault(session()->get('locale'))->name}}
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="list-id">
                                <div class="row">
                                    <div class="col">
                                        <a class="mb-0">ID : #{{$advert->id}}</a>
                                    </div>
                                    <div class="col col-auto">
                                        @if(session()->get('locale') == 'tr')
                                            Yayınlayan
                                        @elseif(session()->get('locale') == 'en')
                                            Posted by
                                        @elseif(session()->get('locale') == 'fn')
                                            Lähettäjä
                                        @endif
                                        <a class="mb-0 font-weight-bold">{{$advert->user->name}}</a> / {{$advert->created_at->format('d M Y')}}
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="card-footer">--}}
{{--                            <div class="icons">--}}
{{--                                <a href="#" class="btn btn-info icons"--}}
{{--                                ><i class="si si-share me-1"></i> Share Ad</a--}}
{{--                                >--}}
{{--                                <a--}}
{{--                                    href="#"--}}
{{--                                    class="btn btn-danger icons"--}}
{{--                                    data-bs-toggle="modal"--}}
{{--                                    data-bs-target="#report"--}}
{{--                                ><i class="si si-exclamation me-1"></i> Report Abuse</a--}}
{{--                                >--}}
{{--                                <a href="#" class="btn btn-primary icons"--}}
{{--                                ><i class="si si-heart me-1"></i> 678</a--}}
{{--                                >--}}
{{--                                <a href="#" class="btn btn-secondary icons"--}}
{{--                                ><i class="si si-printer me-1"></i> Print</a--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <!--Description-->

                    <!--Comments-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                @if(session()->get('locale') == 'tr')
                                    Yorumlar
                                @elseif(session()->get('locale') == 'en')
                                    Testimonials
                                @elseif(session()->get('locale') == 'fn')
                                    Suosittelut
                                @endif
                            </h3>
                        </div>
                        <div class="card-body p-0">
                            @foreach($advert->comments as $comment)
                                <div class="media mt-0 p-5">
                                    <div class="d-flex me-3">
                                        <a href="#"
                                        ><img
                                                class="media-object brround"
                                                alt="64x64"
                                                src="{{asset($comment->user->avatar)}}"
                                            />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">
                                            {{$comment->user->name}}
                                            <span
                                                class="fs-14 ms-0"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="verified"
                                            ><i class="fa fa-check-circle-o text-success"></i
                                                ></span>
                                            <span class="fs-14 ms-2">
                        {{$comment->stars}} <i class="fa fa-star text-yellow"></i
                                                ></span>
                                        </h5>

                                        <p class="font-13 mb-2 mt-2">
                                            {{$comment->translateOrDefault(session()->get('locale'))->content}}
                                        </p>


                                    </div>
                                </div>
                                @endforeach

                        </div>
                    </div>
                    <!--/Comments-->
                    @if(auth()->check() && $advert->user->id != auth()->id())
                        <div class="card mb-lg-0">
                            <div class="card-header">
                                <h3 class="card-title">
                                    @if(session()->get('locale') == 'tr')
                                        Yorum Bırak
                                    @elseif(session()->get('locale') == 'en')
                                        Leave a Comment
                                    @elseif(session()->get('locale') == 'fn')
                                        Jätä kommentti
                                    @endif
                                </h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('ad.comment',$advert->id)}}">
                                    @csrf
                                    <textarea class="form-control" name="comment" rows="6" placeholder="Comment"></textarea>
                                    <div class="form-group mt-3">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <h5>@if(session()->get('locale') == 'tr')
                                                        Puanlama
                                                    @elseif(session()->get('locale') == 'en')
                                                        Rating
                                                    @elseif(session()->get('locale') == 'fn')
                                                        Arviointi
                                                    @endif</h5>
                                                <div class="star-rating d-flex" style="justify-content:space-around">
                                                    <div>
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label for="star5" class="badge badge-default mb-2">5 <i class="fa fa-star"></i></label>
                                                    </div>

                                                    <div>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label for="star4" class="badge badge-default mb-2">4 <i class="fa fa-star"></i></label>
                                                    </div>

                                                    <div>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label for="star3" class="badge badge-default mb-2">3 <i class="fa fa-star"></i></label>
                                                    </div>

                                                    <div>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label for="star2" class="badge badge-default mb-2">2 <i class="fa fa-star"></i></label>
                                                    </div>

                                                    <div>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label for="star1" class="badge badge-default mb-2">1 <i class="fa fa-star"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gönder Butonu -->
                                    <button class="btn btn-primary mt-3">
                                        @if(session()->get('locale') == 'tr')
                                            Gönder
                                        @elseif(session()->get('locale') == 'en')
                                            Submit
                                        @elseif(session()->get('locale') == 'fn')
                                            Lähetä
                                        @endif
                                    </button>
                                </form>
                            </div>
                        </div>
                       @endif

                </div>
            </div>
        </div>
    </section>



@endsection
