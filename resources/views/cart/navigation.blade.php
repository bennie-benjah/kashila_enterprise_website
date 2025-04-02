<header class="header" data-header>
    <div class="container">

        <div class="overlay" data-overlay></div>

        <a href="#" class="logo">
            <img src="{{ asset('assets/images/logo7.jpg') }}" width="55" height="53" alt="KEL logo">
        </a>

        <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                <ion-icon name="close-outline"></ion-icon>
            </button>

            {{-- <a href="#" class="logo">
                <img src="{{ asset('assets/images/logo7.jpg') }}" width="55" height="53" alt="KEL logo">
            </a> --}}

            <ul class="navbar-list">
                <li class="navbar-item"><a href="{{ url('/')}}" class="navbar-link">Home</a></li>

                @auth
                <li class="navbar-item">
                    <a href="{{ route('logout') }}" class="navbar-link logout-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <li class="navbar-item">
                    <a href="{{ route('login') }}" class="navbar-link login-link">Log In</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('register') }}" class="navbar-link signup-link">Sign Up</a>
                </li>
            @endauth

            </ul>

            <form class="search-bar">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="submit" class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </form>
            <ul class="nav-action-list">
                @auth
                    <li>
                        <a href="{{ route('wishlist') }}" class="nav-action-btn">
                            <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                            <span class="nav-action-text">Wishlist</span>
                            <data class="nav-action-badge" value="{{ $wishlistCount }}" aria-hidden="true">{{ $wishlistCount }}</data>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('cart') }}" class="nav-action-btn">
                            <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>
                            <data class="nav-action-text">Basket: <strong>${{ $cartTotal }}</strong></data>
                            <data class="nav-action-badge" value="{{ $cartCount }}" aria-hidden="true">{{ $cartCount }}</data>
                        </a>
                    </li>
                @endauth
            </ul>


            <!-- Search Bar -->

        </nav>

    </div>
</header>
