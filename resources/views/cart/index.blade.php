<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kashila Enterprise Ltd</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logo7.jpg" type="image/svg+xml') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @include('home.css');
    <style>
        /* Modern Cart Design */
        .cart-container {
            width: 70%;
            margin: 4rem auto;
            padding: 0 1.5rem;
        }

        .cart-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .cart-header h2 {
            color: #1a4d2a;
            font-size: 2.75rem;
            font-family: 'Josefin Sans', sans-serif;
            letter-spacing: -0.5px;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .cart-header h2:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #81c784;
        }

        .cart-items {
            display: grid;
            gap: 2rem;
        }

        .cart-item {
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

        .cart-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(10, 60, 30, 0.12);
        }

        .item-image {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 12px;
            border: 1px solid #e0f0e0;
        }

        .item-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding-right: 2rem;
        }

        .item-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: #1a4d2a;
            margin: 0;
        }

        .item-price {
            font-size: 1.2rem;
            color: #4a6b54;
            font-weight: 500;
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .item-price:before {
            content: "$";
            font-size: 0.9em;
        }

        .item-controls {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-top: auto;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .quantity-input {
            width: 80px;
            padding: 1rem 1rem;
            border: 2px solid #c8e6c9;
            border-radius: 10px;
            font-size: 1.1rem;
            text-align: center;
            background-color: #2d6a4f;
            transition: border-color 0.3s ease;
        }

        .quantity-input:focus {
            border-color: #81c784;
            outline: none;
            box-shadow: 0 0 0 3px rgba(129, 199, 132, 0.2);
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

        .cart-total {
            margin-top: 4rem;
            padding: 2.5rem;
            background: linear-gradient(135deg, #1a4d2a 0%, #2d6a4f 100%);
            border-radius: 16px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.4rem;
            box-shadow: 0 8px 24px rgba(10, 60, 30, 0.15);
        }

        .total-label {
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .total-amount {
            font-weight: 700;
            font-size: 1.8rem;
        }

        .empty-cart {
            text-align: center;
            padding: 4rem;
            background: #f8fff8;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(10, 60, 30, 0.08);
        }

        .empty-cart p {
            color: #7a9c88;
            font-size: 1.2rem;
            margin: 1rem 0;
        }

        .empty-cart img {
            width: 200px;
            margin: 2rem auto;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .cart-container {
            width: 100%;

        }
            .cart-item {
                flex-direction: column;
                padding: 1.5rem;
                gap: 1.5rem;
            }

            .item-image {
                width: 100%;
                height: 240px;
            }

            .item-details {
                padding-right: 0;
            }

            .item-controls {
                flex-direction: column;
                align-items: stretch;
            }

            .cart-total {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
                padding: 2rem;
            }

            .quantity-input {
                width: 100%;
                background-color: #2d6a4f;
            }
        }
        .whatsapp-btn {
        background: #25D366;
        color: white;
        padding: 1rem 2rem;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-top: 2rem;
        width: fit-content;
        margin-left: auto;
    }

    .whatsapp-btn:hover {
        background: #128C7E;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(18, 140, 126, 0.3);
    }

    .whatsapp-btn ion-icon {
        font-size: 1.5rem;
    }

        @media (max-width: 480px) {
            .cart-header h2 {
                font-size: 2rem;
            }

            .item-name {
                font-size: 1.2rem;
            }

            .cart-total {
                font-size: 1.2rem;
            }

            .total-amount {
                font-size: 1.5rem;
            }
        }
    </style>


</head>

<body id="top">

    @include('cart.navigation')






    <div class="cart-container">
        <div class="cart-header">
            <h2>Your Shopping Cart</h2>
        </div>

        @if ($cartItems->isEmpty())
            <div class="empty-cart">
                <img src="{{ asset('assets/images/empty_cart.png') }}" alt="Empty cart">
                <p>Your cart is feeling light! Add some green goodness 🌿</p>
            </div>
        @else
            <div class="cart-items">
                @foreach ($cartItems as $item)
                    <div class="cart-item">
                        <img src="{{ asset('storage/' . $item->product->image) }}"
                             alt="{{ $item->product->name }}"
                             class="item-image">

                        <div class="item-details">
                            <h3 class="item-name">{{ $item->product->name }}</h3>
                            <p class="item-price">{{ number_format($item->product->price, 2) }}</p>

                            <div class="item-controls">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="quantity-control">
                                    @csrf
                                    @method('PUT')
                                    <input type="number"
                                           name="quantity"
                                           class="quantity-input"
                                           value="{{ $item->quantity }}"
                                           min="1"
                                           onchange="this.form.submit()">
                                </form>

                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="cart-total">
                <span class="total-label">Total Amount:</span>
                <span class="total-amount">${{ number_format($cartItems->sum(function($item) {
                    return $item->product->price * $item->quantity;
                }), 2) }}</span>
            </div>
            @php
    // Create WhatsApp message
    $message = "Hello Kashila Enterprise Ltd,%0A%0AI would like to order:%0A%0A";
    foreach ($cartItems as $item) {
        $message .= "➤ " . $item->product->name . " (Qty: " . $item->quantity . ") - $" . number_format($item->product->price * $item->quantity, 2) . "%0A";
    }
    $message .= "%0ATotal: $" . number_format($cartItems->sum(function($item) {
        return $item->product->price * $item->quantity;
    }), 2) . "%0A%0APlease confirm availability and payment details.";
@endphp

<a href="https://wa.me/254717682107?text={{ $message }}"
   class="whatsapp-btn"
   target="_blank">
    <ion-icon name="logo-whatsapp"></ion-icon>
    Complete Order via WhatsApp
</a>
        @endif
    </div>

    @include('home.footer')

    <a href="#top" class="go-top-btn" data-go-top>
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
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
