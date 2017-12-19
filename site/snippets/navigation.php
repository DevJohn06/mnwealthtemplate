<body>
    <!-- nav -->
    <nav class="menu nav-bkg-color uk-navbar">
        <ul class="nav-space uk-navbar-nav">
            <li class="logo">
                <a href="#home-scroll" data-uk-smooth-scroll>
                    <img src="assets/img/logo.png" alt="">
                </a>
            </li>
        </ul>
        <div class="uk-navbar-flip uk-hidden-small uk-hidden-medium" data-uk-scrollspy-nav="{closest:'li'}">
            <ul class="nav-space-items uk-navbar-nav">
                <li class="nav-items">
                    <a href="#section-home" data-uk-smooth-scroll>Home</a>
                </li>
                <li class="nav-items">
                    <a href="#section-about" data-uk-smooth-scroll="{offset: 50;}">About</a>
                </li>
                <li class="nav-items">
                    <a href="#section-products" data-uk-smooth-scroll>Products</a>
                </li>
                <li class="nav-items">
                    <a href="#section-news" data-uk-smooth-scroll="{offset: -10;}">News</a>
                </li>
                <li class="nav-items">
                    <a href="#section-contact" data-uk-smooth-scroll>Contact</a>
                </li>
                <li class="nav-items">
                    <a href="#login" data-uk-smooth-scroll>
                        <i class="uk-icon-user"></i> Login / Register</a>
                </li>
            </ul>
        </div>
        <a href="#mobile-menu" class="tick-mobile hamburger uk-hidden-large" data-uk-toggle="{target:'.tick-mobile',animation:'uk-animation-fade'}">
            <i class="uk-icon-bars"></i>
        </a>
        <a href="#mobile-menu" class="tick-mobile close-link uk-hidden" data-uk-toggle="{target:'.tick-mobile'}">
            <i class="uk-close"></i>
        </a>
    </nav>

    <section id="mobile-nav" class="tick-mobile uk-text-center uk-width-1-1 uk-hidden">
        <ul>
            <li>
                <a class="menu-link" href="#section-about" data-uk-toggle="{target:'.tick-mobile'}">About</a>
            </li>
            <li>
                <a class="menu-link" href="#section-services" data-uk-toggle="{target:'.tick-mobile'}">Services</a>
            </li>
            <li>
                <a class="menu-link" href="#section-testimony" data-uk-toggle="{target:'.tick-mobile'}">Testimonials</a>
            </li>
            <li>
                <a class="menu-link" href="#section-clients" data-uk-toggle="{target:'.tick-mobile'}">Clients</a>
            </li>
            <li>
                <a class="menu-link" href="#section-contact" data-uk-toggle="{target:'.tick-mobile'}">Contact</a>
            </li>
            <li>
                <ul class="social-icons-nav">
                    <li>
                        <a href="" title="share on facebook">
                            <i class="uk-icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" title="share on pinterest">
                            <i class="uk-icon-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" title="share on tumblr">
                            <i class="uk-icon-tumblr"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" title="share on reddit">
                            <i class="uk-icon-reddit-alien"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" title="share on linkedin">
                            <i class="uk-icon-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" title="share on twitter">
                            <i class="uk-icon-twitter"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- end nav -->
