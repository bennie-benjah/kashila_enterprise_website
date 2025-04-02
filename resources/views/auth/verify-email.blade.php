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
<br><br>

            <div class="login-container">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="login-card">
                                <div class="card-body">
                                    <h2 class="login-header">Verify Email</h2>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif


        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button class="btn btn-primary btn-lg">
                    {{ __('Resend Verification Email') }}
                <button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-danger">
                {{ __('Log Out') }}
            </button>
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

