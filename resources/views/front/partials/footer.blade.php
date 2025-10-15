<!--Footer Section-->
<section>
    <footer class="bg-dark text-white">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h6>Help</h6>
                        <ul class="list-unstyled mb-0">
                            @foreach($pages as $page)
                                <li><a href="{{route('page',$page->id)}}">{{$page->translate(session()->get('locale'))->title}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h6 class="mb-2">@if(session()->get('locale') == 'tr')
                                Abone Ol
                            @elseif(session()->get('locale') == 'en')
                                Subscribe
                            @elseif(session()->get('locale') == 'fn')
                                Tilaa
                            @endif</h6>
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control br-ts-7 br-bs-7"
                                placeholder="Email"
                            />
                            <div class="input-group-text border-0 bg-transparent p-0">
                                <button
                                    type="button"
                                    class="btn btn-primary br-te-7 br-be-7"
                                >
                                    Subscribe
                                </button>
                            </div>
                        </div>
                        <h6 class="mb-2 mt-5">Payments</h6>
                        <ul class="payments mb-0">
                            <li>
                                <a href="javascript:;" class="payments-icon"
                                ><i class="fa fa-cc-amex" aria-hidden="true"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"
                                ><i class="fa fa-cc-visa" aria-hidden="true"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"
                                ><i class="fa fa-credit-card-alt" aria-hidden="true"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"
                                ><i class="fa fa-cc-mastercard" aria-hidden="true"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"
                                ><i class="fa fa-cc-paypal" aria-hidden="true"></i
                                    ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark text-white p-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-8 col-sm-12 mt-2 mb-2 text-start">
                        Copyright © 2024
                        <a href="#" class="fs-14 text-primary">Welcoming Nest</a>. Designed
                        with <span class="fa fa-heart text-danger"></span> by
                        <a href="https://bekatos.com" style="color:#ff634c" target="_blank"> Bekatos </a> All
                        rights reserved.
                    </div>
                    <div class="col-lg-4 col-sm-12 ms-auto mb-2 mt-2">
                        <ul class="social mb-0">
                            <li>
                                <a class="social-icon" href=""
                                ><i class="fa fa-facebook"></i
                                    ></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""
                                ><i class="fa fa-twitter"></i
                                    ></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-rss"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""
                                ><i class="fa fa-youtube"></i
                                    ></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""
                                ><i class="fa fa-linkedin"></i
                                    ></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""
                                ><i class="fa fa-google-plus"></i
                                    ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="bg-dark text-white p-0 border-top">--}}
{{--            <div class="container">--}}
{{--                <div class="p-2 text-center footer-links">--}}
{{--                    <a href="#" class="btn btn-link">How It Works</a>--}}
{{--                    <a href="#" class="btn btn-link">About Us</a>--}}
{{--                    <a href="#" class="btn btn-link">Pricing</a>--}}
{{--                    <a href="#" class="btn btn-link">Ads Categories</a>--}}
{{--                    <a href="#" class="btn btn-link">Privacy Policy</a>--}}
{{--                    <a href="#" class="btn btn-link">Terms Of Conditions</a>--}}
{{--                    <a href="#" class="btn btn-link">Blog</a>--}}
{{--                    <a href="#" class="btn btn-link">Contact Us</a>--}}
{{--                    <a href="#" class="btn btn-link">Premium Ad</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </footer>
</section>
<!--/Footer Section-->
