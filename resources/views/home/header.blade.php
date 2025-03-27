<header class="header" data-header>
    <div class="container">

        <div class="overlay" data-overlay></div>

        <a href="#" class="logo">
            <img src="./assets/images/logo7.jpg" width="55" height="53" alt="KEL logo">
        </a>

        <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                <ion-icon name="close-outline"></ion-icon>
            </button>

            {{-- <a href="#" class="logo">
                <img src="./assets/images/logo7.jpg" width="55" height="53" alt="KEL logo">
            </a> --}}



            <ul class="navbar-list">
                <li class="navbar-item"><a href="#" class="navbar-link">Home</a></li>
                <li class="navbar-item"><a href="#product" class="navbar-link">Products</a></li>
                <li class="navbar-item"><a href="#service" class="navbar-link">Services</a></li>
                <li class="navbar-item"><a href="#special" class="navbar-link">Spare Parts</a></li>
                <li class="navbar-item"><a href="#footer" class="navbar-link">Contact</a></li>
                <li class="navbar-item"><a href="{{ route('login') }}" class="navbar-link">Log In</a></li>
                <li class="navbar-item"><a href="{{ route('register') }}" class="navbar-link">Sign Up</a></li>

            </ul>
            <form class="search-bar">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="submit" class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </form>
            <ul class="nav-action-list">
                <!-- Login/Register always visible on Desktop -->


                <li>
                    <button class="nav-action-btn">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        <span class="nav-action-text">Wishlist</span>
                        <data class="nav-action-badge" value="5" aria-hidden="true">5</data>
                    </button>
                </li>

                <li>
                    <button class="nav-action-btn">
                        <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>
                        <data class="nav-action-text" value="318.00">Basket: <strong>$318.00</strong></data>
                        <data class="nav-action-badge" value="4" aria-hidden="true">4</data>

                    </button>
                </li>

            </ul>
            <!-- Search Bar -->

        </nav>

    </div>
</header>
