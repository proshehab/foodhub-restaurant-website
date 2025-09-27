@extends('website.layouts.app')
@section('content')
    <main>

        <!--
                                                                                        - #HOME SECTION
                                                                                    -->

        <section class="home" id="home">

            <div class="home-left">

                <p class="home-subtext">Hi, new friend!</p>

                <h1 class="main-heading">We do not cook, we create your emotions!</h1>

                <p class="home-text">
                    Consectetur numquam poro nemo veniam eligendi rem adipisci quo modi
                </p>

                <div class="btn-group">

                    <button class="btn btn-primary btn-icon">
                        <img src="{{ asset('website/assets/images/menu.svg') }}" alt="menu icon">
                        Our menu
                    </button>

                    <button class="btn btn-secondary btn-icon">
                        <img src="{{ asset('website/assets/images/arrow.svg') }}" alt="menu icon">
                        About us
                    </button>

                </div>

            </div>

            <div class="home-right">

                <img src="{{ asset('website/assets/images/food1.png') }}" alt="food image" class="food-img food-1"
                    width="200" loading="lazy">
                <img src="{{ asset('website/assets/images/food2.png') }}" alt="food image" class="food-img food-2"
                    width="200" loading="lazy">
                <img src="{{ asset('website/assets/images/food3.png') }}" alt="food image" class="food-img food-3"
                    width="200" loading="lazy">

                <img src="{{ asset('website/assets/images/dialog-1.svg') }}" alt="dialog" class="dialog dialog-1"
                    width="230">
                <img src="{{ asset('website/assets/images/dialog-2.svg') }}" alt="dialog" class="dialog dialog-2"
                    width="230">

                <img src="{{ asset('website/assets/images/circle.svg') }}" alt="circle shape" class="shape shape-1"
                    width="25">
                <img src="{{ asset('website/assets/images/circle.svg') }}" alt="circle shape" class="shape shape-2"
                    width="15">
                <img src="{{ asset('website/assets/images/circle.svg') }}" alt="circle shape" class="shape shape-3"
                    width="30">
                <img src="{{ asset('website/assets/images/ring.svg') }}" alt="ring shape" class="shape shape-4"
                    width="60">
                <img src="{{ asset('website/assets/images/ring.svg') }}" alt="ring shape" class="shape shape-5"
                    width="40">

            </div>

        </section>





        <!--
                                                                                                                    - #ABOUT SECTION
                                                                                                                  -->

        <section class="about" id="about">

            <div class="about-left">

                <div class="img-box">
                    <img src="{{ asset('website/assets/images/about-image.jpg') }}" alt="about image" class="about-img"
                        width="250">
                </div>

                <div class="abs-content-box">
                    <div class="dotted-border">
                        <p class="number-lg">17</p>
                        <p class="text-md">Years <br> Experiense</p>
                    </div>
                </div>

                <img src="{{ asset('website/assets/images/circle.svg') }}" alt="circle shape" class="shape shape-6"
                    width="20">
                <img src="{{ asset('website/assets/images/circle.svg') }}" alt="circle shape" class="shape shape-7"
                    width="30">
                <img src="{{ asset('website/assets/images/ring.svg') }}" alt="ring shape" class="shape shape-8"
                    width="35">
                <img src="{{ asset('website/assets/images/ring.svg') }}" alt="ring shape" class="shape shape-9"
                    width="80">

            </div>

            <div class="about-right">

                <h2 class="section-title">We are doing more than
                    you expect</h2>

                <p class="section-text">
                    Faudantium magnam error temporibus ipsam aliquid neque quibusdam dolorum, quia ea numquam
                    assumenda mollitia
                    dolorem
                    impedit. Voluptate at quis exercitationem officia temporibus adipisci quae totam enim dolorum,
                    assumenda.
                    Sapiente
                    soluta nostrum reprehenderit a velit obcaecati facilis vitae magnam tenetur neque vel itaque
                    inventore eaque
                    explicabo
                    commodi maxime! Aliquam quasi, voluptates odio.
                </p>

                <p class="section-text">
                    Consectetur adipisicing elit. Cupiditate nesciunt amet facilis numquam, nam adipisci qui
                    voluptate voluptas
                    enim
                    obcaecati veritatis animi nulla, mollitia commodi quaerat ex, autem ea laborum.
                </p>

                <img src="./assets/images/signature.png" alt="signature" class="signature" width="150">

            </div>

        </section>





        <!--
                                                                                                                    - #SERVICES SECTION
                                                                                                                  -->

        <section class="services" id="services">

            <div class="service-card">

                <p class="card-number">01</p>

                <h3 class="card-heading">We are located in the city center</h3>

                <p class="card-text">
                    Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                </p>

            </div>

            <div class="service-card">

                <p class="card-number">02</p>

                <h3 class="card-heading">Fresh ingredients from organic farms</h3>

                <p class="card-text">
                    Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                </p>

            </div>

            <div class="service-card">

                <p class="card-number">03</p>

                <h3 class="card-heading">Own fast delivery. 30 min Maximum</h3>

                <p class="card-text">
                    Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                </p>

            </div>

            <div class="service-card">

                <p class="card-number">04</p>

                <h3 class="card-heading">Professional, experienced chefs</h3>

                <p class="card-text">
                    Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                </p>

            </div>

            <div class="service-card">

                <p class="card-number">05</p>

                <h3 class="card-heading">The highest standards of service</h3>

                <p class="card-text">
                    Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                </p>

            </div>

        </section>





        <!--
                                                                                                                    - #PRODUCT SECTION
                                                                                                                  -->

        <section class="product" id="menu">

            <h2 class="section-title">Most popular dishes</h2>

            <p class="section-text">
                Consectetur numquam poro nemo veniam
                eligendi rem adipisci quo modi.
            </p>

            <div class="products-grid">

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="{{ asset('website/assets/images/menu1.jpg') }}" alt="product image"
                                class="product-img" width="200" loading="lazy">
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Stracciatella</h3>

                                <p class="product-price">
                                    <span class="small">$</span>11
                                </p>
                            </div>

                            <p class="product-text">
                                tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.
                            </p>

                            <div class="product-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="{{ asset('website/assets/images/menu2.jpg') }}" alt="product image"
                                class="product-img" width="200" loading="lazy">
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Chevrefrit au miel</h3>

                                <p class="product-price">
                                    <span class="small">$</span>14
                                </p>
                            </div>

                            <p class="product-text">
                                tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.
                            </p>

                            <div class="product-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="{{ asset('website/assets/images/menu3.jpg') }}" alt="product image"
                                class="product-img" width="200" loading="lazy">

                            <div class="card-badge green">
                                <ion-icon name="leaf"></ion-icon>
                                <p>Vegan</p>
                            </div>
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Saumon Gravlax</h3>

                                <p class="product-price">
                                    <span class="small">$</span>9
                                </p>
                            </div>

                            <p class="product-text">
                                tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.
                            </p>

                            <div class="product-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="{{ asset('website/assets/images/menu4.jpg') }}" alt="product image"
                                class="product-img" width="200" loading="lazy">

                            <div class="card-badge red">
                                <ion-icon name="flame"></ion-icon>
                                <p>Hot</p>
                            </div>
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Croustillant de poisson</h3>

                                <p class="product-price">
                                    <span class="small">$</span>4
                                </p>
                            </div>

                            <p class="product-text">
                                tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.
                            </p>

                            <div class="product-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="{{ asset('website/assets/images/menu5.jpg') }}" alt="product image"
                                class="product-img" width="200" loading="lazy">

                            <div class="card-badge green">
                                <ion-icon name="leaf"></ion-icon>
                                <p>Vegan</p>
                            </div>
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Carpaccio de daurade</h3>

                                <p class="product-price">
                                    <span class="small">$</span>6
                                </p>
                            </div>

                            <p class="product-text">
                                tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.
                            </p>

                            <div class="product-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="{{ asset('website/assets/images/menu2.jpg') }}" alt="product image"
                                class="product-img" width="200" loading="lazy">
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Chevrefrit au miel</h3>

                                <p class="product-price">
                                    <span class="small">$</span>14
                                </p>
                            </div>

                            <p class="product-text">
                                tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.
                            </p>

                            <div class="product-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                        </div>

                    </div>

                </a>

            </div>

            <button class="btn btn-primary btn-icon">
                <img src="{{ asset('website/assets/images/menu.svg') }}" alt="menu icon">
                Full menu
            </button>

        </section>





        <!--
                                                                                                                    - #TESTIMONIALS SECTION
                                                                                                                  -->

        <section class="testimonials" id="testimonials">

            <h2 class="section-title">What our customers say?</h2>

            <p class="section-text">
                Consectetur numquam poro nemo veniam
                eligendi rem adipisci quo modi.
            </p>

            <div class="testimonials-grid">

                <div class="testimonials-card">

                    <h4 class="card-title">Very tasty</h4>

                    <div class="testimonials-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="testimonials-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde
                        excepturi
                        inventore possimus
                        laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                        tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem
                        accusamus! Quibusdam
                        labore,
                        aliquam dolor harum!
                    </p>

                    <div class="customer-info">
                        <div class="customer-img-box">
                            <img src="{{ asset('website/assets/images/testimonials1.jpg') }}" alt="customer image"
                                class="customer-img" width="100" loading="lazy">
                        </div>

                        <h5 class="customer-name">Emma Newman</h5>
                    </div>

                </div>

                <div class="testimonials-card">

                    <h4 class="card-title">I have lunch here every day</h4>

                    <div class="testimonials-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="testimonials-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde
                        excepturi
                        inventore possimus
                        laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                        tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem
                        accusamus! Quibusdam
                        labore,
                        aliquam dolor harum!
                    </p>

                    <div class="customer-info">
                        <div class="customer-img-box">
                            <img src="{{ asset('website/assets/images/testimonials2.jpg') }}" alt="customer image"
                                class="customer-img" width="100" loading="lazy">
                        </div>

                        <h5 class="customer-name">Paul Trueman</h5>
                    </div>

                </div>

            </div>

        </section>



        <!--
                                                                                                              - #LOGIN SECTION
                                                                                                            -->
        <section class="login-section" id="login">

            <div class="form-box login-form">
                <h2>Customer Login</h2>

                <form action="/login" method="POST">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                    <p class="form-link">
                        Don't have an account? <a href="register.html">Register here</a>
                    </p>

                </form>
            </div>

        </section>




    </main>
@endsection
