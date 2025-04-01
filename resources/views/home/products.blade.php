<section id="product" class="section product">
    <div class="container">

        <h2 class="h2 section-title">Bestsellers Products</h2>

        <ul class="filter-list">
            <li>
                <button class="filter-btn active" data-filter="all">All</button>
            </li>
            @foreach ($categories as $category)
                <li>
                    <button class="filter-btn" data-filter="{{ $category->name }}">{{ $category->name }}</button>
                </li>
            @endforeach
        </ul>

        <ul class="product-list">
            @forelse ($products as $product)
                <li class="product-item" data-category="{{ $product->category->name }}">
                    <div class="product-card" tabindex="0">
                        <figure class="card-banner">
                            <img src="{{ asset('storage/' . $product->image) }}" width="312" height="350" loading="lazy" alt="{{ $product->name }}" class="image-contain">
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
                                    {{ $product->name }}<br>Shop Now
                                </a>
                            </h3>
                            <data class="card-price" value="{{ $product->price }}">{{ $product->stock > 0 ? 'On Stock' : 'Out of Stock' }}</data>
                        </div>
                    </div>
                </li>
            @empty
                <li class="no-product-message">No products available in this category</li>
            @endforelse
        </ul>

    </div>
</section>
