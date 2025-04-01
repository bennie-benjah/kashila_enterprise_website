<section id="special" class="section special">
    <div class="container">

        <div class="special-product">

            <h2 class="h2 section-title">
                <span class="text">Spare Parts</span>
                <span class="line"></span>
            </h2>

            <ul class="has-scrollbar">
                @foreach ($products->where('category.name', 'special') as $product)
                    <li class="product-item">
                        <div class="product-card" tabindex="0">

                            <figure class="card-banner">
                                <img
                                    src="{{ asset('storage/' . $product->image) }}"
                                    width="312" height="350" loading="lazy"
                                    alt="{{ $product->name }}" class="image-contain">

                                <div class="card-badge">New</div>

                                <ul class="card-action-list">
                                    <li class="card-action-item">
                                        <button class="card-action-btn" aria-labelledby="card-label-{{ $product->id }}-1">
                                            <ion-icon name="cart-outline"></ion-icon>
                                        </button>
                                        <div class="card-action-tooltip" id="card-label-{{ $product->id }}-1">Add to Cart</div>
                                    </li>

                                    <li class="card-action-item">
                                        <button class="card-action-btn" aria-labelledby="card-label-{{ $product->id }}-2">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
                                        <div class="card-action-tooltip" id="card-label-{{ $product->id }}-2">Add to Wishlist</div>
                                    </li>

                                    <li class="card-action-item">
                                        <button class="card-action-btn" aria-labelledby="card-label-{{ $product->id }}-3">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>
                                        <div class="card-action-tooltip" id="card-label-{{ $product->id }}-3">Quick View</div>
                                    </li>

                                    <li class="card-action-item">
                                        <button class="card-action-btn" aria-labelledby="card-label-{{ $product->id }}-4">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>
                                        <div class="card-action-tooltip" id="card-label-{{ $product->id }}-4">Compare</div>
                                    </li>
                                </ul>
                            </figure>

                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    <a href="https://wa.me/254717682107?text=Hello%20Kashila%20Enterprise%20Ltd,%20I%20would%20like%20to%20order%20a%20{{ urlencode($product->name) }}.%20Please%20provide%20more%20details.">
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <data class="card-price" value="{{ $product->price }}">
                                    {{ $product->stock > 0 ? 'On Stock' : 'Out of Stock' }}
                                </data>
                            </div>

                        </div>
                    </li>
                @endforeach
            </ul>

        </div>

    </div>
</section>
