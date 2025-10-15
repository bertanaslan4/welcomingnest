@extends('front.layouts.app')
@section('content')
    <!--Contact-->
    <div class="sptb">
        <div class="container">
            @if(auth()->check())
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
                        <form method="post" action="{{route('site.comment')}}">
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
    <!--Contact-->
    <!--Statistics-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>
                    @if(session()->get('locale') == 'tr')
                        İletişim
                    @elseif(session()->get('locale') == 'en')
                        Contact
                    @elseif(session()->get('locale') == 'fn')
                        Ota yhteyttä
                    @endif
                </h1>
            </div>
            <div class="support">
                <div class="row text-white">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="support-service bg-primary br-2 mb-4 mb-xl-0">
                            <i class="fa fa-phone"></i>
                            <h6>+90 506 900 90 38</h6>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="support-service bg-warning br-2">
                            <i class="fa fa-envelope-o"></i>
                            <h6>welcomingnest@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->
    @endsection
