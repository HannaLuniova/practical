<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- https://cdnjs.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!--обнуляющий -->
    <link rel="stylesheet" href="css/zeroing.css">
    <!--подключение шрифта-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!--свои стили-->
    <link rel="stylesheet" href="css/style.css">
    <!--адаптив-->
    <link rel="stylesheet" href="css/adaptive.css">
</head>

<body>
    <!-- header  -->
    <header class="header">
        <!-- Bootstrap: class="container" -->
        <div class="container ">
            <div class="header__inner">
                <a class="logo" href="#">
                    <img class="logo__link" src="img/logo.png" alt="logo">
                </a>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item"><a class="menu__list-link" href="#">О НАС</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">АВТОПАРК</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">ОТЗЫВЫ</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">УСЛОВИЯ</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">КОНТАКТЫ</a></li>
                    </ul>
                </nav>
                <a class="phone" href="tel:xxxxxxxxxxxx">+375 (29) 712 51 55 (МТС)</a>
            </div>
        </div>
    </header>
    <!-- Первый блок section -->
    <section class="top">
        <div class="container">
            <div class="top__heading">
                <!-- левая часть section "top" -->
                <div class="top__content">
                    <h1 class="top__title">
                        LOREM IPSUM
                        DOLOR SIT AMET
                    </h1>
                    <p class="top__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, laudantium.
                    </p>
                    <a class="application-btn" href="#">Скачать приложение</a>
                </div>
                <!-- правая часть section "top" -->
                <div class="top__slider">
                    <!-- Bootstrap=>Components=>Carousel -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/slider-img.png" class="d-block w-100 " alt="Машина">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                <h5 class="top__slider-text">
                                    <span>$ р/час</span>
                                    <span>5 мест</span>
                                    <span>50 тыс.км пробега</span>
                                </h5>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/slider-img1.png" class="d-block w-100" alt="Машина">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                <h5 class="top__slider-text">
                                    <span>$ р/час</span>
                                    <span>5 мест</span>
                                    <span>50 тыс.км пробега</span>
                                </h5>
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider-img2.png" class="d-block w-100" alt="Машина">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                <h5 class="top__slider-text">
                                    <span>$ р/час</span>
                                    <span>5 мест</span>
                                    <span>50 тыс.км пробега</span>
                                </h5>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- левая часть section "top"-->
            <div class="top__bottom">
                <div class="top-items">
                    <div class="top__item">
                        <img class="top__item-img" src="img/icon-1.png" alt="">
                        <p class="top__item-text">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="top__item">
                        <img class="top__item-img" src="img/icon-2.png" alt="">
                        <p class="top__item-text">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="top__item">
                        <img class="top__item-img" src="img/icon-3.png" alt="">
                        <p class="top__item-text">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                </div>
                <!-- правая часть section "top"-->
                <div class="top__links">
                    <a class="top__link" href="#">Условия аренды автомобиля</a>
                    <a class="top__link" href="#">Публичный договор </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Второй блок section -->
    <section class="registr">
        <div class="container">
            <div class="registr__inner">
                <div class="registr__content">
                    <?php
                    include "include.php";
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Третий блок section -->
    <section class="benefits">
        <div class="container ">
            <h3 class="benefits__title">Преимущества</h3>
            <div class="benefits__items">
                <ul class="benefits__list">
                    <li class="benefits__list-item">Lorem ipsum dolor sit.</li>
                    <li class="benefits__list-item">Lorem, ipsum</li>
                    <li class="benefits__list-item">Lorem, ipsum</li>
                    <li class="benefits__list-item">Lorem 24/7</li>
                    <li class="benefits__list-item">Lorem ipsum dolor</li>
                    <li class="benefits__list-item">Lorem ipsum dolor sit</li>
                    <li class="benefits__list-item">Lorem ipsum dolor sit</li>
                </ul>
                <img class="benefits__images" src="img/benefits.png" alt="">
                <div class="benefits__content">
                    <p class="benefits__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem est,
                        voluptates laboriosam officiis cupiditate cum voluptatibus quidem necessitatibus quibusdam
                        obcaecati provident vitae saepe omnis numquam quasi nisi magnam aliquam reiciendis?</p>
                    <p class="benefits__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste rerum velit
                        illum ab repudiandae non!</p>
                    <a class="video-popup" href=""> ПОСМОТРЕТЬ<br> ПРЕЗЕНТАЦИЮ</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Четвёртый  блок section -->
    <section class="reviews">
        <div class="container">
            <h3 class="reviews__title">
                Отзывы
            </h3>
            <!-- Bootstrap=>Components=>Carousel+ свои классы(reviews__slider,reviews__item,reviews__item-name,reviews__item-text, id="one,two,three")-->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="reviews__slider">
                            <div class="reviews__item" id="one">
                                <p class="reviews__item-name ">Елена, 36 лет</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                            <div class="reviews__item" id="three">
                                <p class="reviews__item-name">Максим, 20 лет</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                            <div class="reviews__item">
                                <p class="reviews__item-name">Ольга, 29 лет</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                            <div class="reviews__item" id="two">
                                <p class="reviews__item-name ">Сергей, 41 год</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews__slider">
                            <div class="reviews__item " id="one">
                                <p class="reviews__item-name ">Павел, 36 лет</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                            <div class="reviews__item">
                                <p class="reviews__item-name">Юля, 25 лет</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                            <div class="reviews__item" id="three">
                                <p class="reviews__item-name">Вадим, 29 лет</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                            <div class="reviews__item" id="two">
                                <p class="reviews__item-name two">Ирина, 38 лет</p>
                                <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Quod
                                    similique iste corporis nisi enim, accusamus veniam cumque illum dicta autem
                                    delectus ad
                                    laudantium nihil eaque error reprehenderit, itaque ipsum totam?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Пятый  блок section -->
    <section class="feedback">
        <div class="container">
            <div class="feedback__inner">
                <img class="feedback__images" src="img/feedback-img.png" alt="">
                <form class="feedback__form" action="">
                    <h3 class="feedback__title">Остались вопросы?</h3>
                    <p class="feedback__text">Мы перезвоним Вам и проконсультируем по любому вопросу</p>
                    <input class="feedback__input" type="text" placeholder="Имя">
                    <input class="feedback__input" type="text" placeholder="Телефон">
                    <button class="feedback__btn" type="submit">ОСТАВИТЬ ЗАЯВКУ</button>
                </form>
            </div>
        </div>
    </section>
    <!-- footer-->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__top">
                    <form class="footer__form" action="admin.php" method="post">
                        <p class="footer__title">Войти под правами администратора</p>
                        <input class="footer__input" type="text" name="email" placeholder="Email" >
                        <input class="footer__input" type="text" name="password" placeholder="Password">
                        <button class="footer__btn" type="submit">Войти</button>
                    </form>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item"><a class="menu__list-link" href="#">О НАС</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">АВТОПАРК</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">ОТЗЫВЫ</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">УСЛОВИЯ</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">КОНТАКТЫ</a></li>
                        </ul>
                    </nav>
                    <a class="phone" href="tel:xxxxxxxxxxxx">+xx (xxx) xxx xx xx</a>
                </div>
                <ul class="footer__social">
                    <li class="footer__social-item"><a class="footer__social-link" href="#"><img class="footer__social-img" src="img/facebook.png"></a></li>
                    <li class="footer__social-item"><a class="footer__social-link" href="#"><img class="footer__social-img" src="img/instagram.png"></a></li>
                    <li class="footer__social-item"><a class="footer__social-link" href="#"><img class="footer__social-img" src="img/email.png"></a></li>
                </ul>
                <div class="footer__text">
                    Онлайн-опрос © 2021 ZaicevRustam Все права защищены
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap: js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>