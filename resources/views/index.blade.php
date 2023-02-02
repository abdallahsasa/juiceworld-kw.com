@extends('layouts.app')
@section('content')
    <!-- app wrapper -->
    <div class="sb-app">
        <!-- preloader -->
        <div class="sb-preloader">
            <div class="sb-preloader-bg"></div>
            <div class="sb-preloader-body">
                <div class="sb-loading">
                    <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
                </div>
                <div class="sb-loading-bar">
                    <div class="sb-bar"></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- click effect -->
        <div class="sb-click-effect"></div>
        <!-- loader -->
        <div class="sb-load"></div>
        <!-- top bar -->
        <div class="sb-top-bar-frame">
            <div class="sb-top-bar-bg"></div>
            <div class="container">
                <div class="sb-top-bar">
                    <a href="home-1.html" class="sb-logo-frame">
                        <!-- logo img -->
                        <img src="img/ui/logo.svg" alt="Starbelly">
                    </a>
                    <!-- menu -->
                    <div class="sb-right-side">
                        <nav id="sb-dynamic-menu" class="sb-menu-transition">
                            <ul class="sb-navigation">
                                <li class="sb-has-children">
                                    <a href="home-1.html">Home</a>
                                    <ul>
                                        <li><a href="home-1.html">Type 1</a></li>
                                        <li><a href="home-2.html">Type 2</a></li>
                                    </ul>
                                </li>
                                <li class="sb-has-children">
                                    <a href="about-1.html">Pages</a>
                                    <ul>
                                        <li><a href="about-1.html">About 1</a></li>
                                        <li><a href="about-2.html">About 2</a></li>
                                        <li><a href="blog-1.html">Blog style 1</a></li>
                                        <li><a href="blog-2.html">Blog style 2</a></li>
                                        <li><a href="blog-3.html">Blog style 3</a></li>
                                        <li><a href="publication-1.html">Publication 1</a></li>
                                        <li><a href="publication-2.html">Publication 2</a></li>
                                        <li><a href="publication-3.html">Publication 3</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="gallery-2.html">Gallery 2</a></li>
                                        <li><a href="reviews.html">Reviews</a></li>
                                        <li><a href="reservation.html">Reservation</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="sb-active sb-has-children">
                                    <a href="menu-1.html">Menu</a>
                                    <ul>
                                        <li><a href="menu-1.html">Menu style 1</a></li>
                                        <li><a href="menu-2.html">Menu style 2</a></li>
                                        <li><a href="menu-3.html">Menu style 3</a></li>
                                        <li><a href="menu-4.html">Menu style 4</a></li>
                                        <li><a href="menu-5.html">Menu style 5</a></li>
                                        <li><a href="menu-6.html">Menu style 6</a></li>
                                    </ul>
                                </li>
                                <li class="sb-has-children">
                                    <a href="shop-1.html">Shop</a>
                                    <ul>
                                        <li><a href="shop-1.html">Shop style 1</a></li>
                                        <li><a href="shop-2.html">Shop style 2</a></li>
                                        <li><a href="shop-list-1.html">Shop list 1</a></li>
                                        <li><a href="shop-list-2.html">Shop list 2</a></li>
                                        <li><a href="product.html">Product page</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="sb-buttons-frame">
                            <!-- button -->
                            <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0 sb-btn-cart">
                <span class="sb-icon">
                  <img src="img/ui/icons/cart.svg" alt="icon">
                </span>
                                <i class="sb-cart-number">5</i>
                            </div>
                            <!-- button end -->
                            <!-- menu btn -->
                            <div class="sb-menu-btn"><span></span></div>
                            <!-- info btn -->
                            <div class="sb-info-btn"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- info bar -->
            <div class="sb-info-bar">
                <div class="sb-infobar-content">
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Contact</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <ul class="sb-list sb-mb-30">
                        <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
                        <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
                        <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
                        <li><b>Email:</b><span>starbelly@mail.com</span></li>
                    </ul>
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Instagram</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <ul class="sb-instagram sb-mb-30">
                        <li><a href="#."><img src="img/instagram/1.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/2.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/3.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/4.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/5.jpg" alt="instagram"></a></li>
                        <li><a href="#."><img src="img/instagram/6.jpg" alt="instagram"></a></li>
                    </ul>
                    <hr>
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Latest publications</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                        <div class="sb-cover-frame">
                            <img src="img/blog/1.jpg" alt="cover">
                        </div>
                        <div class="sb-blog-card-descr">
                            <h5 class="sb-mb-5">Simple Homemade Tomato Soup</h5>
                            <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
                        </div>
                    </a>
                    <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                        <div class="sb-cover-frame">
                            <img src="img/blog/2.jpg" alt="cover">
                        </div>
                        <div class="sb-blog-card-descr">
                            <h5 class="sb-mb-5">Thai Coconut Soup with Tofu and Rice</h5>
                            <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
                        </div>
                    </a>
                    <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                        <div class="sb-cover-frame">
                            <img src="img/blog/3.jpg" alt="cover">
                        </div>
                        <div class="sb-blog-card-descr">
                            <h5 class="sb-mb-5">21 Things You Should Absolutely Be Buying at ALDI</h5>
                            <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
                        </div>
                    </a>
                </div>
                <div class="sb-info-bar-footer">
                    <ul class="sb-social">
                        <li><a href="#."><i class="far fa-circle"></i></a></li>
                        <li><a href="#."><i class="far fa-circle"></i></a></li>
                        <li><a href="#."><i class="far fa-circle"></i></a></li>
                        <li><a href="#."><i class="far fa-circle"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- info bar end -->
            <!-- minicart -->
            <div class="sb-minicart">
                <div class="sb-minicart-content">
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Your order.</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/4.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Saumon Gravlax</h4>
                            <div class="sb-price"><sub>$</sub> 9</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/1.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Chevrefrit au miel</h4>
                            <div class="sb-price"><sub>$</sub> 14</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/2.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Croustillant de poisson</h4>
                            <div class="sb-price"><sub>$</sub> 4</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/3.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Stracciatella</h4>
                            <div class="sb-price"><sub>$</sub> 11</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="img/menu/5.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Carpaccio de daurade</h4>
                            <div class="sb-price"><sub>$</sub> 19</div>
                        </div>
                    </a>
                </div>
                <div class="sb-minicart-footer">
                    <!-- button -->
                    <a href="cart.html" class="sb-btn sb-btn-gray sb-btn-text">
                        <span>View order</span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="checkout.html" class="sb-btn sb-btn-text">
                        <span>Checkout</span>
                    </a>
                    <!-- button end -->
                </div>
            </div>
            <!-- minicart end -->
        </div>
        <!-- top bar end -->

        <!-- dynamic content -->
        <div id="sb-dynamic-content" class="sb-transition-fade">

            <!-- banner -->
            <section class="sb-banner sb-banner-xs sb-banner-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- main title -->
                            <div class="sb-main-title-frame">
                                <div class="sb-main-title">
                                    <h1 class="sb-h2">Starbelly menu</h1>
                                    <ul class="sb-breadcrumbs">
                                        <li><a href="home-1.html">Home</a></li>
                                        <li><a href="#.">Menu</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- main title end -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- menu section 1 -->
            <section class="sb-menu-section sb-p-90-60">
                <div class="sb-bg-1">
                    <div></div>
                </div>
                <div class="container">
                    <!-- filter -->
                    <div class="sb-filter mb-30">
                        <a href="#." data-filter="*" class="sb-filter-link sb-active">All dishes</a>
                        <a href="#." data-filter=".starters" class="sb-filter-link">Starters</a>
                        <a href="#." data-filter=".main-dishes" class="sb-filter-link">Main dishes</a>
                        <a href="#." data-filter=".drinks" class="sb-filter-link">Drinks</a>
                        <a href="#." data-filter=".desserts" class="sb-filter-link">Dessert</a>
                    </div>
                    <!-- filter end -->
                    <div class="sb-masonry-grid">
                        <div class="sb-grid-sizer"></div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/1.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(4 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/2.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/2.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Saumon Gravlax</h4>
                                    <div class="sb-price"><sub>$</sub> 9</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars sb-unrated">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>Unrated</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/3.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/3.jpg" alt="product">
                                    <div class="sb-badge sb-hot"><i class="fas fa-pepper-hot"></i> Hot</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Croustillant de poisson</h4>
                                    <div class="sb-price"><sub>$</sub> 4</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 drinks">
                            <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/4.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Stracciatella</h4>
                                    <div class="sb-price"><sub>$</sub> 11</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(2 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 desserts">
                            <a data-fancybox="menu" data-no-swup href="img/menu/5.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/5.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(6 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 drinks">
                            <a data-fancybox="menu" data-no-swup href="img/menu/6.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/6.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(14 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/7.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/7.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Stracciatella</h4>
                                    <div class="sb-price"><sub>$</sub> 11</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 desserts">
                            <a data-fancybox="menu" data-no-swup href="img/menu/8.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/8.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars sb-unrated">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>Unrated</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/9.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/9.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 drinks">
                            <a data-fancybox="menu" data-no-swup href="img/menu/10.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/10.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(8 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/11.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/11.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 7</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li><span>(9 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/12.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/12.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 12</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(5 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/1.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(7 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/2.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/2.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Saumon Gravlax</h4>
                                    <div class="sb-price"><sub>$</sub> 9</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(4 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/3.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/3.jpg" alt="product">
                                    <div class="sb-badge sb-hot"><i class="fas fa-pepper-hot"></i> Hot</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Croustillant de poisson</h4>
                                    <div class="sb-price"><sub>$</sub> 4</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li><span>(9 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/4.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Stracciatella</h4>
                                    <div class="sb-price"><sub>$</sub> 11</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(2 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/5.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/5.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(11 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/6.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/6.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(4 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/7.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/7.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Stracciatella</h4>
                                    <div class="sb-price"><sub>$</sub> 11</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 drinks">
                            <a data-fancybox="menu" data-no-swup href="img/menu/15.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/15.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(12 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/14.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/14.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(9 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/10.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/10.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(3 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 desserts">
                            <a data-fancybox="menu" data-no-swup href="img/menu/11.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/11.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 7</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li><span>(3 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 desserts">
                            <a data-fancybox="menu" data-no-swup href="img/menu/12.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/12.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 12</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars sb-unrated">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>Unrated</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 desserts">
                            <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/1.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(2 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/2.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/2.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Saumon Gravlax</h4>
                                    <div class="sb-price"><sub>$</sub> 9</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 main-dishes">
                            <a data-fancybox="menu" data-no-swup href="img/menu/3.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/3.jpg" alt="product">
                                    <div class="sb-badge sb-hot"><i class="fas fa-pepper-hot"></i> Hot</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Croustillant de poisson</h4>
                                    <div class="sb-price"><sub>$</sub> 4</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars sb-unrated">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>Unrated</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 drinks">
                            <a data-fancybox="menu" data-no-swup href="img/menu/15.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/15.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Stracciatella</h4>
                                    <div class="sb-price"><sub>$</sub> 11</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 desserts">
                            <a data-fancybox="menu" data-no-swup href="img/menu/5.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/5.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 drinks">
                            <a data-fancybox="menu" data-no-swup href="img/menu/14.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/14.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Chevrefrit au miel</h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(2 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 starters">
                            <a data-fancybox="menu" data-no-swup href="img/menu/7.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/7.jpg" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Stracciatella</h4>
                                    <div class="sb-price"><sub>$</sub> 11</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                        <li><span>(4 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="sb-grid-item sb-item-25 desserts">
                            <a data-fancybox="menu" data-no-swup href="img/menu/8.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="img/menu/8.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">Carpaccio de daurade</h4>
                                    <div class="sb-price"><sub>$</sub> 6</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><span>(1 ratings)</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- menu end -->

            <!-- promo -->
            <section class="sb-p-0-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sb-promo-frame sb-mb-30">
                                <div class="sb-promo-content">
                                    <div class="sb-text-frame">
                                        <h3 class="sb-mb-10"><sup>-</sup> <b class="sb-h2">50</b> <sup>%</sup></h3>
                                        <h3 class="sb-mb-15">Discount for all* burgers!</h3>
                                        <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                                        <!-- button -->
                                        <a href="product.html" class="sb-btn sb-ppc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                                            <span>Get it now</span>
                                        </a>
                                        <!-- button end -->
                                    </div>
                                    <div class="sb-image-frame">
                                        <div class="sb-illustration-4">
                                            <img src="img/illustrations/burger.png" alt="burger" class="sb-burger">
                                            <div class="sb-cirkle-1"></div>
                                            <div class="sb-cirkle-2"></div>
                                            <div class="sb-cirkle-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sb-promo-frame sb-mb-30">
                                <div class="sb-promo-content">
                                    <div class="sb-text-frame">
                                        <h3 class="sb-mb-15">Visit Starbelly and get your coffee*</h3>
                                        <h3 class="sb-mb-10"><b class="sb-h2">For free!</b></h3>
                                        <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                                        <!-- button -->
                                        <a href="product.html" class="sb-btn sb-ppc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                                            <span>Get it now</span>
                                        </a>
                                        <!-- button end -->
                                    </div>
                                    <div class="sb-image-frame">
                                        <div class="sb-illustration-5">
                                            <img src="img/illustrations/cup.png" alt="cup" class="sb-cup">
                                            <div class="sb-cirkle-1"></div>
                                            <div class="sb-cirkle-2"></div>
                                            <div class="sb-cirkle-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- promo end -->

            <!-- footer -->
            <footer>
                <div class="container">
                    <div class="sb-footer-frame">
                        <a href="home-1.html" class="sb-logo-frame">
                            <!-- logo img -->
                            <img src="img/ui/logo.svg" alt="Starbelly">
                        </a>
                        <ul class="sb-social">
                            <li><a href="#."><i class="far fa-circle"></i></a></li>
                            <li><a href="#."><i class="far fa-circle"></i></a></li>
                            <li><a href="#."><i class="far fa-circle"></i></a></li>
                            <li><a href="#."><i class="far fa-circle"></i></a></li>
                        </ul>
                        <div class="sb-copy">&copy; late 2021 Starbelly. All Rights Reserved.</div>
                    </div>
                </div>
            </footer>
            <!-- footer end -->

        </div>
        <!-- dynamic content end -->

    </div>
    <!-- app wrapper end -->
@endsection
