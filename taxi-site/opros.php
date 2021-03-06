<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Опрос</title>
        <!-- Подключение css Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- https://cdnjs.com/ -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <!-- Подключение обнуляющего css  -->
        <link rel="stylesheet" href="css/zeroing.css">
        <!-- Свои стили -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Адаптив -->
        <link rel="stylesheet" href="css/adaptive.css">
</head>

<body>
        <!-- header -->
        <div class="wrapper">
                <header class="header">
                        <div class="menu">
                                <div class="container">
                                        <div class="menu__container">
                                                <div class="menu__logo">
                                                        <img class="menu__logo-img" src="images/logo.png" alt="Логотип">
                                                </div>
                                                <ul class="menu__list">
                                                        <li class="menu__item">
                                                                <a class="menu__link" href="#">Home</a>
                                                        </li>
                                                        <li class="menu__item">
                                                                <a class="menu__link" href="#">About</a>
                                                        </li>
                                                        <li class="menu__item">
                                                                <a class="menu__link" href="#">Servicing</a>
                                                        </li>
                                                        <li class="menu__item">
                                                                <a class="menu__link" href="#">Portfolio</a>
                                                        </li>
                                                        <li class="menu__item">
                                                                <a class="menu__link" href="#">Blog</a>
                                                        </li>
                                                        <li class="menu__item">
                                                                <a class="menu__link" href="#">Contact Us</a>
                                                        </li>
                                                        <li class="menu__item"><a class="menu__link" href="#">
                                                                        <!-- Подключение иконки с https://fontawesome.com/ -->
                                                                        <i class="fas fa-search"></i>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </header>
                <section class="slider">
                        <!-- Подключение Bootstrap -->
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                        <div class="carousel-item active" id="main">
                                                <img src="images/taksi.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" id="main">
                                                <img src="images/taksi2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" id="main">
                                                <img src="images/taksi3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                </button>
                        </div>
                </section>
                <section class="price">
                        <!-- Подключение container Bootstrap -->
                        <div class="container">
                                <div class="title">
                                        <h2 class="h2 title__h2">Пройти опрос</h2>
                                </div>
                                <div class="registr__content">
                                        <form action="checkopros.php" method="post">
                                                <div class="form-check fs-5 lh-lg ">
                                                        <p class="test text-uppercase "> 1. Как часто Вы пользуетесь услугами такси?</p>
                                                        <input class="form-check-input " type="radio" name="q1" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label " for="flexRadioDefault2">
                                                                Несколько раз в месяц
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Один раз в месяц
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Несколько раз в год
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Никогда
                                                        </label><br>
                                                        <br>
                                                        <p class="test text-uppercase"> 2. По какой причине Вы чаще всего пользуетесь услугами такси?</p>
                                                        <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Поездка в аэропорт/ из аэропорта
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Поездка за развлечением / домой
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Поездка на работу/ с работы
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                В случае спешки
                                                        </label><br>
                                                        <br>
                                                        <p class="test text-uppercase"> 3. В какое время дня Вы больше всего пользуетесь услугами такси?</p>
                                                        <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Утром, в первой половине дня
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                После обеда
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Вечером
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Ночью
                                                        </label><br>
                                                        <br>
                                                        <p class="test text-uppercase"> 4. По каким причинам Вы больше не пользуетесь услугами такси?</p>
                                                        <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Цена
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Неприятные чувства
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Плохой опыт с таксистами
                                                        </label><br>
                                                        <br>
                                                        <p class="test text-uppercase"> 5. Каким способом Вы чаще всего заказываете такси?</p>
                                                        <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                По телефону
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                По Интернету
                                                        </label><br>
                                                        <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Лично, помахав рукой
                                                        </label><br>
                                                        <input class="form-check-input " type="radio" name="q5" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                Я ищу стоянку такси
                                                        </label><br>
                                                </div> <br>
                                                <button class="registr__btn" type="submit" tabindex="3">Отправить</button>
                                        </form>
                                </div>
                        </div>
                </section>
                <section class="contact">
                        <div class="container">
                                <div class="title contact__title">
                                        <h2 class="h2 title__h2">Contact Us</h2>
                                        <p class="h2 title__content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea neque
                                                voluptates illum quidem et dignissimos at! Voluptates velit eum quis?Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Nihil, quisquam!
                                        </p>
                                </div>
                                <ul class="contact__list">
                                        <li class="contact__item">
                                                <i class="fas fa-map-marker-alt contact__icon"></i>
                                                <p class="contact__text">
                                                        Республика Беларусь
                                                </p>
                                        </li>
                                        <li class="contact__item">
                                                <i class="fas fa-phone-alt contact__icon"></i>
                                                <p class="contact__text">
                                                        +x xxx xxx xx xx
                                                </p>
                                                <p class="contact__text">
                                                        +x xxx xxx xx xx
                                                </p>
                                        </li>
                                        <li class="contact__item">
                                                <i class="fas fa-envelope contact__icon"></i>
                                                <p class="contact__text">
                                                        Lorem@lorem.com
                                                </p>
                                                <p class="contact__text">
                                                        Lorem@lorem.com
                                                </p>
                                        </li>
                                </ul>
                                <div class="contact__form">
                                        <form class="form" action="" method="POST">
                                                <p class="form__title">Войти под правами администратора</p>
                                                <input class="form__input" type="text" name="" placeholder="Email" tabindex="1">
                                                <input class="form__input" type="text" name="" placeholder="Password" tabindex="2">
                                                <button class="form__btn" type="submit">Войти</button>
                                        </form>
                                </div>
                        </div>
                </section>
                <footer class="footer">
                        <div class="container">
                                <div class="inner__footer">
                                        <div class="footer__text">
                                                Онлайн-опрос © 2021 ZaicevOleg Все права защищены
                                        </div>
                                </div>
                        </div>
                </footer>
        </div>
        <?php
        // Функция ini_set не отображает вывод всех ошибок на экране пользователя
        // ini_set('display_errors', 'Off');
        // include "checkopros.php"; 
        ?>
        <!-- Подключение js Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>