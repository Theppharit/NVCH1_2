<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Index</title>

</head>

<body>


    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                Prime House <i class='bx bxs-home-alt-2'></i>
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home-alt-2'></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#popular" class="nav__link">
                            <i class='bx bx-building-house'></i>
                            <span>Residences</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#value" class="nav__link">
                            <i class='bx bx-award'></i>
                            <span>Value</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-phone'></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Theme change button -->
            <i class='bx bx-moon change-theme' id="theme-button"></i>

            <a href="#" class="button nav__button">
                Subscribe
            </a>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Discover <br> Most Suitable <br> Property
                    </h1>
                    <p class="home__description">
                        Find a variety of properties that suit you very easily,
                        forget all difficulties in finding a residence for you
                    </p>

                    <form action="" class="home__search">
                        <i class='bx bxs-map'></i>
                        <input type="search" placeholder="Search by location..." class="home__search-input">
                        <button class="button">Search</button>
                    </form>

                    <div class="home__value">
                        <div>
                            <h1 class="home__value-number">
                                15K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Premium <br> Product
                            </span>
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                20K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Happy <br> Customer
                            </span>
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                35K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Awards <br> Winning
                            </span>
                        </div>
                    </div>
                </div>

                <div class="home__images">
                    <div class="home__orbe"></div>

                    <div class="home__img">
                        <img src="assets/img/7.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <div class="logos__img">
                    <img src="assets/img/10.png" alt="">
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <div class="container">
                <span class="section__subtitle">Best Choise</span>
                <h2 class="section__title">
                    Popular Residences<span>.</span>
                </h2>

                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="assets/img/1.webp" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>฿</span>4,490,000
                                </h2>

                                <h3 class="popular__title">
                                    Anasiri Rama 2 - Outer Ring Road
                                </h3>

                                <p class="popular__description">
                                    165 Phanthai Norasing, Mueang Samut Sakhon District, Samut Sakhon 74000 
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/2.webp" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>฿</span>5,390,000
                                </h2>

                                <h3 class="popular__title">
                                    Anasiri Rattanathibet
                                </h3>

                                <p class="popular__description">
                                    Anasiri Rattanathibet 111 Project, Bang Rak Phatthana Subdistrict, Bang Bua Thong District, Nonthaburi 11110, Thailand
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/3.webp" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>฿</span>14,000,000
                                </h2>

                                <h3 class="popular__title">
                                    Burasiri Chatu Choti
                                </h3>

                                <p class="popular__description">
                                    342 Chatu Chot 12, Ao Ngoen, Sai Mai, Bangkok 10220
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/4.webp" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>฿</span>4,000,000
                                </h2>

                                <h3 class="popular__title">
                                    Anasiri Wongwaen - Lam Luk Ka
                                </h3>

                                <p class="popular__description">
                                    Motorway access road, Bueng Kham Phroi Subdistrict, Lam Luk Ka District, Pathum Thani 12150
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/5.webp" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>฿</span>5,990,000
                                </h2>

                                <h3 class="popular__title">
                                    Saransiri Ratchaphruek - 346
                                </h3>

                                <p class="popular__description">
                                    100, Bang Duea Subdistrict, Mueang Pathum Thani District, Pathum Thani 12140
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-button-next">
                        <i class='bx bx-chevron-right'></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VALUE ====================-->
        <section class="value section" id="value">
            <div class="value__container container grid">

                <div class="value__images">

                    <div class="value__orbe"></div>
                    <div class="value__img">
                        <img src="assets/img/8.jpg" alt="">
                    </div>
                </div>


                <div class="value__content">
                    <div class="value__data">
                        <span class="section__subtitle">Our Value</span>
                        <h2 class="section__title">
                            Value We Give To You<span>.</span>
                        </h2>
                        <p class="value__description">
                            We always ready to help by providing the best service for you.
                            We believe a good place to live can make your life better.
                        </p>
                    </div>

                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Best interest rates on the market
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </div>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-x-square value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Prevent unstable prices
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </div>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-bar-chart-square value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Best prices on the market
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </div>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-check-square value__accordion-icon'></i>
                                <h3 class="value__accordion-title">

                                    Security of your data
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <div class="contact__container container grid">
                <div class="contact__images">
                    <div class="contact__orbe"></div>

                    <div class="contact__img">
                         <img src="assets/img/6.webp" alt="">
                    </div>
                </div>

                <div class="contact__content">
                    <div class="contact__data">
                        <span class="section__subtitle">Contact Us</span>
                        <h2 class="section__title">
                            Easy to Contact us<span>.</span>
                        </h2>
                        <p class="contact__description">
                            Is there a problem finding your dream home? Need a
                            guide in buying first home? or need a consultation
                            on residential issues? just contact us.
                        </p>
                    </div>

                    <div class="contact__card">
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-phone-call'></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        call
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact__card-button">
                                Call Now
                            </button>
                        </div>

                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-message-rounded-dots'></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Chat
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact__card-button">
                                Chat Now
                            </button>
                        </div>

                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-video'></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Video Call
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact__card-button">
                                Video Call Now
                            </button>
                        </div>

                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-envelope'></i>
                                <div>
                                    <h3 class="contact__card-title">
                                        Message
                                    </h3>
                                    <p class="contact__card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact__card-button">
                                Message Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SUBSCRIBE ====================-->
        <section class="subscribe section">
            <div class="subscribe__container container">
                <h1 class="subscribe__title">
                    Get Started with Holux
                </h1>
                <p class="subscribe__description">
                    Subscribe and find super attractive price
                    quotes from us, Find your residence soon
                </p>
                <a href="#" class="button subscribe__button">
                    Get Started
                </a>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    Holux<i class='bx bxs-home-alt-2'></i>
                </a>

                <p class="footer__description">
                    Our vision is to make all people <br>
                    the best place to live for them.
                </p>
            </div>

            <div class="footer__content">

                <div>
                    <h3 class="footer__title">
                        About
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Features</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">News & Blog</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        Company
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">How We Work?</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Capital</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Security</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        Support
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">FAQs</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Support center</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        Follow us
                    </h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram-alt'></i>
                        </a>
                        <a href="https://www.pinterest.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-pinterest'></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__info container">
            <span class="footer__copy">
                &#169; Bedimcode. All rigths reserved
            </span>

            <div class="footer_privacy">
                <a href="">Terms & Agreements</a>
                <a href="">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-chevrons-up'></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>