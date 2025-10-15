<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-assets-path="{{ asset('dashboard/assets') }}/" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic</title>


    <meta name="description" content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template." />
    <meta name="keywords" content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/materialize_admin">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/materialize-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap" rel="stylesheet">

    @include('admin.partials.css')




    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/pages/page-auth.css')}}">
</head>

<body>



<!-- Content -->

<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0">
        <div class="authentication-inner py-6">

            <!-- Login -->
            <div class="card p-md-7 p-1">
                <!-- Logo -->


                <!-- /Logo -->

                <div class="card-body mt-1">
                    <h4 class="mb-1">Welcome to Dashboard! 👋</h4>

                    <form id="formAuthentication" class="mb-5" action="{{route('admin.login.post')}}" method="POST">
                        @csrf
                        <div class="form-floating form-floating-outline mb-5">
                            <input type="text" class="form-control" id="email" name="username" placeholder="Enter your username" autofocus>
                            <label for="email">Username</label>
                        </div>
                        <div class="mb-5">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                        <label for="password">Password</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>


                </div>
            </div>
            <!-- /Login -->
            <img alt="mask" src="{{asset('dashboard/assets/img/illustrations/auth-basic-login-mask-light.png')}}" class="authentication-image d-none d-lg-block" data-app-light-img="illustrations/auth-basic-login-mask-light.png" data-app-dark-img="illustrations/auth-basic-login-mask-dark.html" />
        </div>
    </div>
</div>




@include('admin.partials.js')


<!-- Page JS -->
<script src="{{asset('dashboard/assets/js/pages-auth.js')}}"></script>

</body>



</html>

<!-- beautify ignore:end -->

