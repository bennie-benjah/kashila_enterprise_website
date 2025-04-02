<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kashila Enterprise Ltd</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo7.jpg" type="image/svg+xml') }}">


    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!--
    - preload banner
  -->
    {{-- <link rel="preload" href="./assets/images/hero-banner.png" as="image"> --}}
    @include('auth.css')
    @include('home.css')
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    @include('auth.navigation')
    <main>
        <article>

<div class="login-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-card">
                    <div class="card-body">

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label class="form-label" for="email" :value="__('Email')" />
            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="btn btn-primary btn-lg">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</article>
</main>
@include('home.footer')


<!--
- #GO TO TOP
-->

<a href="#top" class="go-top-btn" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
</a>

<!--
- custom js link
-->
@include('home.scripts')

</body>

</html>
