<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zeroing.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">
        <header>
            <div class="container">
                <div class="logo scene ">
                    <div data-speed='100' class="layer layer-1"></div>
                </div>
                <ul class="menu__top">
                    <li> <a href="#"><img src="css/img/fb.png" alt="facebook"></a></li>
                    <li> <a href="#"><img src="css/img/instagram.png" alt="instagram"></a></li>
                    <li> <a href="#"><img src="css/img/Twitter.png" alt="Twitter"></a></li>
                    <li> <a href="#"><img src="css/img/email.png" alt="email"></a></li>
                </ul>
            </div>
        </header>
        <section id="main">
            <object class="cvg__img" id="gears" type="image/svg+xml" data="css/img/cat.svg"></object>
            <p class="main__text">ЗАРЕГИСТРИРУЙСЯ <br><br> ЧТОБЫ ПОЛУЧИТЬ ДОСТУП К ПРОХОЖДЕНИЮ
                ОПРОСА<br><br>О ДОМАШНИХ
                ПИТОМЦАХ</p>
            <div class="container">
                <div class="inner">
                    <div class="description">
                        <div class="description__form">
                            <form action="sign_up.php" method="POST">
                                <input tabindex="1" type="text" name="name" placeholder="Имя" autofocus onclick="playGears()"><br><br>
                                <input tabindex="2" type="password" name="pas" placeholder="Пароль" onclick="playGears()"><br><br>
                                <input tabindex="3" type="text" name="email" placeholder="Электронная почта" onclick="playGears()"><br><br>
                                <input tabindex="4" type="text" name="country" placeholder="Страна" onclick="playGears()"><br><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                                        <span class="description__slider">
                                            Я согласен(на) со всеми правилами и условиями
                                        </span><br>
                                </div>
                                <button class="form-button" tabindex="5" >Зарегистрироваться</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="footer__row">
                    <div class="footer__text">
                        Онлайн-опрос © 2021 LuniovaHanna Все права защищены
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.5/vivus.js" integrity="sha512-JDgkxcdf7oYN/lR29Dzzw17b5Rv42eJ4Vj8aysjr+YpqwaURHrcR1/wGmyIBlsXK55Wsq3TW9tWoDzIou2q3qw==" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

</body>

</html>