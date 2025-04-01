<section class="section collection">
    <div class="container">
        <ul class="collection-list has-scrollbar">
            @foreach ($products as $product)
                <li>
                    <div class="collection-card"
                        style="background-image: url('{{ asset('storage/'.$product->image) }}')">
                        <h3 class="h4 card-title"></h3>
                    </div>
                    <a href="https://wa.me/254717682107?text=Hello%20Kashila%20Enterprise%20Ltd,%20I%20would%20like%20to%20order%20a%20{{ urlencode($product->name) }}.%20Please%20provide%20more%20details."
                        class="btn btn-secondary">
                        <span>{{ $product->name }}</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
