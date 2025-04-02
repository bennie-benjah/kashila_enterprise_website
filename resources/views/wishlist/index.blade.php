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
@include('home.css');
<style>
    /* Wishlist Styling */
    .wishlist-container {
        width: 70%;
        margin: 4rem auto;
        padding: 0 1.5rem;
    }

    .wishlist-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .wishlist-header h2 {
        color: #1a4d2a;
        font-size: 2.75rem;
        font-family: 'Josefin Sans', sans-serif;
        letter-spacing: -0.5px;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }

    .wishlist-header h2:after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: #81c784;
    }

    .wishlist-items {
        display: grid;
        gap: 2rem;
    }

    .wishlist-item {
        display: flex;
        gap: 2rem;
        padding: 2rem;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(10, 60, 30, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .wishlist-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(10, 60, 30, 0.12);
    }

    .wishlist-item-image {
        width: 160px;
        height: 160px;
        object-fit: cover;
        border-radius: 12px;
        border: 1px solid #e0f0e0;
        margin: 0 auto;
    }

    .wishlist-item-details {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding-right: 2rem;
    }

    .wishlist-item-name {
        font-size: 1.4rem;
        font-weight: 600;
        color: #1a4d2a;
        margin: 0;
    }

    .wishlist-item-price {
        font-size: 1.2rem;
        color: #4a6b54;
        font-weight: 500;
    }

    .item-actions {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-top: auto;
    }

    .add-to-cart-btn {
        background: #1a4d2a;
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .add-to-cart-btn:hover {
        background: #2d6a4f;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .remove-btn {
        background: #ff4444;
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .remove-btn:hover {
        background: #ff0000;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(255, 0, 0, 0.15);
    }

    .empty-wishlist {
        text-align: center;
        padding: 4rem;
        background: #f8fff8;
        border-radius: 16px;
        margin: 2rem auto;
        box-shadow: 0 8px 24px rgba(10, 60, 30, 0.08);
    }
    .empty-wishlist img{
        margin: 0 auto;
    }

    .empty-wishlist p {
        color: #7a9c88;
        font-size: 1.2rem;
        margin: 1rem 0;
    }

    @media (max-width: 768px) {
        .wishlist-item {
            flex-direction: column;
            padding: 1.5rem;
            gap: 1.5rem;
        }
        .wishlist-container {
        width: 100%;

    }
        .wishlist-item-image {
            width: 100%;
            height: 240px;
        }

        .item-actions {
            flex-direction: column;
            align-items: stretch;
        }
    }

    @media (max-width: 480px) {
        .wishlist-header h2 {
            font-size: 2rem;
        }

        .wishlist-item-name {
            font-size: 1.2rem;
        }

    }
</style>
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    @include('cart.navigation')

    <div class="wishlist-container">
        <div class="wishlist-header">
            <h2>Your Wishlist</h2>
        </div>

        @if ($wishlistItems->isEmpty())
            <div class="empty-wishlist">
                <img src="{{ asset('assets/images/empty_wishlist.png') }}" alt="Empty wishlist" style="width: 200px;">
                <p>Your wishlist is empty. Start saving your favorite items! 💚</p>
            </div>
        @else
            <div class="wishlist-items">
                @foreach ($wishlistItems as $item)
                    <div class="wishlist-item">
                        <img src="{{ asset('storage/' . $item->product->image) }}"
                             alt="{{ $item->product->name }}"
                             class="wishlist-item-image">

                        <div class="wishlist-item-details">
                            <h3 class="wishlist-item-name">{{ $item->product->name }}</h3>
                            <p class="wishlist-item-price">${{ number_format($item->product->price, 2) }}</p>

                            <div class="item-actions">
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $item->product->id }}">
                                    <button type="submit" class="card-action-btn" aria-labelledby="card-label-{{ $item->product->id }}-1">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </button>
                                </form>
                                <div class="card-action-tooltip" id="card-label-{{ $item->product->id }}-1">Add to Cart</div>

                                <form action="{{ route('wishlist.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-btn">
                                        <ion-icon name="trash-outline"></ion-icon>
                                        Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
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
  <script>
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if(session('info'))
        toastr.info("{{ session('info') }}");
    @endif

    @if(session('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

@include('home.scripts')

</body>

</html>
