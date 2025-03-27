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
    <link rel="shortcut icon" href="./assets/images/logo7.jpg" type="image/svg+xml">

    <head>
        <!-- Other head elements -->

    </head>
    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

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
@include('home.css');
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    @include('home.header')

    <main>
        <article>

            <!--
        - #HERO
      -->


            @include('home.hero')
            <!--
        - #COLLECTION
      -->

            @include('home.collection')
            <!--
        - #PRODUCT
      -->

            @include('home.products')
            <!--
        - #CTA
      -->

            @include('home.cta')
            <!--
        - #SPECIAL
      -->

            @include('home.special')
            <!--
        - #SERVICE
      -->

            @include('home.service')

            <!--
        - #INSTA POST
      -->



        </article>
    </main>

    <!--
    - #FOOTER
  -->
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
