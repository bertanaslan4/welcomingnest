@extends('front.layouts.app')
@section('content')
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="col-lg-4 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        @if(session()->get('locale') == 'tr')
                                            Giriş Yap
                                        @elseif(session()->get('locale') == 'en')
                                            Login
                                        @elseif(session()->get('locale') == 'fn')
                                            Kirjaudu sisään
                                        @endif
                                    </h3>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">

                                            <x-input-label class="form-label text-dark" for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <x-input-label class="form-label text-dark" for="password" :value="__('Password')" />

                                            <x-text-input id="password" class="form-control"
                                                          type="password"
                                                          name="password"
                                                          required autocomplete="current-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control form-checkbox">
                                                @if (Route::has('password.request'))
                                                    <a class="float-end small text-dark mt-1" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                                <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                                <span class="custom-control-label text-dark">{{ __('Remember me') }}</span>

                                            </label>
                                        </div>
                                        <div class="form-footer mt-2">
                                            <x-primary-button class="btn btn-primary btn-block">
                                                {{ __('Log in') }}
                                            </x-primary-button>
                                        </div>
                                        <div class="text-center mt-3 text-dark">
                                            @if(session()->get('locale') == 'tr')
                                                Henüz hesabın yok mu?
                                            @elseif(session()->get('locale') == 'en')
                                                Don't have account yet?
                                            @elseif(session()->get('locale') == 'fn')
                                                Eikö sinulla ole vielä tiliä?
                                            @endif
                                             <a href="{{route('register')}}">
                                                 @if(session()->get('locale') == 'tr')
                                                     Üye ol
                                                 @elseif(session()->get('locale') == 'en')
                                                        Sign Up
                                                 @elseif(session()->get('locale') == 'fn')
                                                     Rekisteröidy
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
