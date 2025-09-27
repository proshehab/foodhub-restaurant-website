        <!--
      - #HEADER
    -->

        <header>

            <nav class="navbar">

                <div class="navbar-wrapper">

                    <a href="#">
                        <img src="./assets/images/logo.svg" alt="logo" width="130">
                    </a>

                    <ul class="navbar-nav">

                        <li>
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('about') }}" class="nav-link">About</a>
                        </li>

                        <li>
                            <a href="#services" class="nav-link">Services</a>
                        </li>

                        <li>
                            <a href="#menu" class="nav-link">Our Menu</a>
                        </li>

                        <li>
                            <a href="#testimonials" class="nav-link">Testimonials</a>
                        </li>

                        <li>
                            <a href="#login" class="nav-link">Login</a>
                        </li>


                    </ul>

                    <div class="navbar-btn-group">

                        <button class="shopping-cart-btn">
                            <img src="./assets/images/cart.svg" alt="shopping cart icon" width="18">
                            <span class="count">5</span>
                        </button>

                        <button class="menu-toggle-btn">
                            <span class="line one"></span>
                            <span class="line two"></span>
                            <span class="line three"></span>
                        </button>

                    </div>

                </div>

            </nav>

            <div class="cart-box">

                <ul class="cart-box-ul">

                    <h4 class="cart-h4">Your order.</h4>

                    <li>
                        <a href="#" class="cart-item">
                            <div class="img-box">
                                <img src="./assets/images/menu1.jpg" alt="product image" class="product-img"
                                    width="50" height="50" loading="lazy">
                            </div>

                            <h5 class="product-name">Saumon gravlax</h5>
                            <p class="product-price">
                                <span class="small">$</span>9
                            </p>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="cart-item">
                            <div class="img-box">
                                <img src="./assets/images/menu2.jpg" alt="product image" class="product-img"
                                    width="50" height="50" loading="lazy">
                            </div>

                            <h5 class="product-name">Chevrefried with honey</h5>
                            <p class="product-price">
                                <span class="small">$</span>14
                            </p>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="cart-item">
                            <div class="img-box">
                                <img src="./assets/images/menu3.jpg" alt="product image" class="product-img"
                                    width="50" height="50" loading="lazy">
                            </div>

                            <h5 class="product-name">Crispy fish</h5>
                            <p class="product-price">
                                <span class="small">$</span>4
                            </p>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="cart-item">
                            <div class="img-box">
                                <img src="./assets/images/menu4.jpg" alt="product image" class="product-img"
                                    width="50" height="50" loading="lazy">
                            </div>

                            <h5 class="product-name">Stracciatella</h5>
                            <p class="product-price">
                                <span class="small">$</span>11
                            </p>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="cart-item">
                            <div class="img-box">
                                <img src="./assets/images/menu5.jpg" alt="product image" class="product-img"
                                    width="50" height="50" loading="lazy">
                            </div>

                            <h5 class="product-name">Sea bream carpaccio</h5>
                            <p class="product-price">
                                <span class="small">$</span>19
                            </p>
                        </a>
                    </li>

                </ul>

                <div class="cart-btn-group">
                    <button class="btn btn-secondary">View order</button>
                    <button class="btn btn-primary">Checkout</button>
                </div>

            </div>

        </header>
