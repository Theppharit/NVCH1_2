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
                Night <i class='bx bxs-car'></i>
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
                            <span>Ride</span>
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
                        Unlock Your <br> Ultimate Drive
                    </h1>
                    <p class="home__description">
                        Elevate your journey with a car that defines who you are. Skip the ordinary and find a ride that matches your vibe effortlessly
                    </p>

                    <form action="" class="home__search">
                        <i class='bx bxs-map'></i>
                        <input type="search" placeholder="Search by brand..." class="home__search-input">
                        <button class="button">Search</button>
                    </form>

                    <div class="home__value">
                        <div>
                            <h1 class="home__value-number">
                                259 <span></span>
                            </h1>
                            <span class="home__value-description">
                                Premium <br> Vehicles
                            </span>
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                2K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Happy <br> Customer
                            </span>
                        </div>

                        <div>
                            <h1 class="home__value-number">
                                28K <span>+</span>
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
                        <img src="assets/img/carhome.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <div class="logos__img">
                    <img src="assets/img/lotus-removebg-preview.png" alt="">
                </div>

                <div class="logos__img">
                    <img src="assets/img/porsche-removebg-preview.png" alt="">
                </div>

                <div class="logos__img">
                    <img src="assets/img/audi-removebg-preview.png" alt="">
                </div>

                <div class="logos__img">
                    <img src="assets/img/michelin-removebg-preview.png" alt="">
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <div class="container">
                <span class="section__subtitle">Best Choise</span>
                <h2 class="section__title">
                    Popular Car<span>.</span>
                </h2>

                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="assets/img/popularcar1.jpg" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>4,999,000
                                </h2>

                                <h3 class="popular__title">
                                    LOTUS EMEYA 600 
                                </h3>

                                <p class="popular__description">
                                    Electric Hyper-GT
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/popularcar2.jpg" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>7,450,000
                                </h2>

                                <h3 class="popular__title">
                                    LOTUS ELETRE 900 SPORT
                                </h3>

                                <p class="popular__description">
                                   Electric Hyper-SUV
                                    
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/popularcar3.jpg" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>120,000,000
                                </h2>

                                <h3 class="popular__title">
                                    LOTUS EVJA
                                </h3>

                                <p class="popular__description">
                                    Electric Hypercar
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/popularcar4.jpg" alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>7,100,000
                                </h2>

                                <h3 class="popular__title">
                                    Porsche Taycan 
                                    (Black Edition)
                                </h3>

                                <p class="popular__description">
                                    Electric Sport Car
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="assets/img/popularcar5.jpg    " alt="" class="popular__img">

                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>9,490,000
                                </h2>

                                <h3 class="popular__title">
                                    Audi RS E-Tron GT
                                </h3>

                                <p class="popular__description">
                                    Electric Sport Car
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
                        <img src="assets/img/valuecar.jpg" alt="">
                    </div>
                </div>


                <div class="value__content">
                    <div class="value__data">
                        <span class="section__subtitle">Our Expertise</span>
                        <h2 class="section__title">
                            Value We Drive To You<span>.</span>
                        </h2>
                        <p class="value__description">
                            We are committed to fueling your passion by providing the finest selection of cars. We believe the right vehicle doesn't just get you there—it transforms your entire journey.
                        </p>
                    </div>

                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-car value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Low-Interest Auto Financing
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                    The rates we provide are the most competitive in the market. We guarantee a transparent financing process with no hidden fees, ensuring your dream car stays within your budget.

                                </div>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-wallet value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Transparent & Fixed Pricing
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                    No markups, no hidden fees. We guarantee that the price you see is the price you pay. Enjoy a worry-free car buying experience with total transparency from start to finish
                                </div>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-crown value__accordion-icon'></i>
                                <h3 class="value__accordion-title">
                                    Premium Quality, Street Value
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                   Experience high-end performance at an unbeatable value. We select only top-tier vehicles that define your status, ensuring you get premium quality that commands the street.
                                </div>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bx-check-shield value__accordion-icon'></i>
                                <h3 class="value__accordion-title">

                                    Certified Vehicle Safety
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <div class="value__accordion-description">
                                    Confidence behind every wheel. Each car undergoes a rigorous multi-point inspection by our experts, ensuring your safety and the machine's peak performance on every journey.
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
                        <img src="assets/img/contactcar.jpg" alt="">
                    </div>
                </div>

                <div class="contact__content">
                    <div class="contact__data">
                        <span class="section__subtitle">Contact Us</span>
                        <h2 class="section__title">
                            Easy to Contact us<span>.</span>
                        </h2>
                        <p class="contact__description">
                            Is there a problem finding your dream electric car? Need a
                            guide in buying first performance electric car? Or do you need advice on a car-related problem? just contact us.
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
                    Get Started with Night
                </h1>
                <p class="subscribe__description">
                    Subscribe and find super attractive price quotes from us. 
                    Find your dream ride today.
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
                    Night<i class='bx bxs-car'></i>
                </a>

                <p class="footer__description">
                    Our vision is to make every journey <br>
                    the best experience for everyone.
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