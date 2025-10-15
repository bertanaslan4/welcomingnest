@extends('front.layouts.app')
@section('content')
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="col-lg-4 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="card mb-xl-0">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        @if(session()->get('locale') == 'tr')
                                            Kayıt Ol
                                        @elseif(session()->get('locale') == 'en')
                                            Register
                                        @elseif(session()->get('locale') == 'fn')
                                            Rekisteröi
                                        @endif
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <x-input-label class="form-label text-dark" for="name"  :value="__('Full Name')"
                                            />
                                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <x-input-label class="form-label text-dark" for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <x-input-label class="form-label text-dark" for="password"
                                                           :value="__('Password')"
                                            />

                                            <x-text-input id="password" class="form-control"
                                                          type="password"
                                                          name="password"
                                                          required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <x-input-label class="form-label text-dark" for="password_confirmation"
                                                           :value="__('Password Confirmation')"
                                            />

                                            <x-text-input id="password_confirmation" class="form-control"
                                                          type="password"
                                                          name="password_confirmation" required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <label class="custom-control form-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <span class="custom-control-label text-dark"
                                                ><a href="#">

                                                        @if(session()->get('locale') == 'tr')
                                                            Kullanım Koşullarını kabul ediyorum
                                                        @elseif(session()->get('locale') == 'en')
                                                            Agree to the terms and conditions
                                                        @elseif(session()->get('locale') == 'fn')
                                                            Hyväksy ehdot
                                                        @endif
                                                    </a></span
                                                >
                                            </label>
                                        </div>
                                        <div class="form-footer mt-2">
                                            <x-primary-button class="btn btn-primary btn-block">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
                                        <div class="text-center mt-3 text-dark">
                                            @if(session()->get('locale') == 'tr')
                                                Zaten üye misiniz?
                                            @elseif(session()->get('locale') == 'en')
                                                Already a member?
                                            @elseif(session()->get('locale') == 'fn')
                                                Oletko jo jäsen?
                                            @endif

                                            <a href="{{ route('login') }}">
                                                @if(session()->get('locale') == 'tr')
                                                    Giriş Yap
                                                @elseif(session()->get('locale') == 'en')
                                                    Sign in
                                                @elseif(session()->get('locale') == 'fn')
                                                    Kirjaudu sisään
                                                @endif
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
