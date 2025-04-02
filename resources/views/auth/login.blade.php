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

    <head>
        <!-- Other head elements -->

    </head>
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

<br>
            <div class="login-container">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="login-card">
                                <div class="card-body">
                                    <h2 class="login-header">Login to Your Account</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                    <label class="form-check-label" for="remember_me">
                                        Remember me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none" href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a>
                                @endif
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Log in
                                </button>
                            </div>
                            <div class="divider mb-4">
                                <span class="divider-text">OR</span>
                            </div>

                            <div class="social-login mb-4">
                                <div class="row g-3"> <!-- Added row with gutter spacing -->
                                    <div class="col-6"> <!-- Each button in half-width column -->
                                        <a href="#" class="btn btn-google btn-lg w-50 text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" class="me-2">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.9 3.28-4.7 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Continue with Google
                    </a>
                </div>
<br>
                    <div class="col-6">
                        <a href="#" class="btn btn-facebook btn-lg w-50 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" class="me-2">
                            <path fill="#ffffff" d="M22.675 0h-21.35C.595 0 0 .595 0 1.325v21.351C0 23.404.595 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .595 23.404 0 22.675 0z"/>
                        </svg>
                        Continue with Facebook
                    </a>
                </div>
                </div>
                                </div>

                        </form>
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
