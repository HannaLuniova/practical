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
        <div class="container">
            <div class="inner">
                <div class="description">
                    <?php
                    $name = preg_match_all("/^[a-zа-я]+\s?[a-zа-я]+$/iu", $_POST["name"]);
                    $password = preg_match_all("/^[a-zа-я\d]+\s?[a-zа-я\d]+$/iu", $_POST["pas"]);
                    $email = preg_match("/[\w\d+-.]+@\w{4,}\.\w{2,4}/iu", $_POST["email"]);
                    $country = preg_match_all("/^[a-zа-я]+\s?[a-zа-я]+$/iu", $_POST["country"]);
                    if ($name == false) {
                        echo "<input type='text' placeholder='Incorrect name' disabled >";
                    }
                    if (
                        $password == false
                    ) {
                        echo "<input type='text' placeholder='Incorrect  password' disabled>";
                    }
                    if ($email == false) {
                        echo "<input type='text' placeholder='Incorrect  email' disabled>";
                    }
                    if (
                        $country == false
                    ) {
                        echo "<input type='text' placeholder='Incorrect  country' disabled>";
                    }
                    if ($name && $password && $email  && $country) {

                        echo '<p class="main__text">РЕГИСТРАЦИЯ ПРОШЛА УСПЕШНО </p>
                    <div class="description__form">
                        <form action="?" method="POST">
                            <input tabindex="1" type="text" name="name" placeholder="Имя" autofocus onclick="playGears()"><br><br>
                            <input tabindex="2" type="password" name="pas" placeholder="Пароль" onclick="playGears()"><br><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexCheckCheckedDisabled">
                                    <span class="description__slider">
                                        Я согласен(на) со всеми правилами и условиями
                                    </span><br>
                            </div>
                            <button class="form-button" tabindex="5" name="q">Войти</button>
                        </form>
                    </div>';
                        
                        file_put_contents(
                            "file.txt",
                            ($_POST["name"] . "\n" . $_POST["pas"] . "\n" . $_POST["email"] . "\n" . $_POST["country"] . "\n"),
                            FILE_APPEND
                        );
                    } else {
                        echo "<p class='text2'>You are not registered</p>";
                    }
                    ?>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.5/vivus.js" integrity="sha512-JDgkxcdf7oYN/lR29Dzzw17b5Rv42eJ4Vj8aysjr+YpqwaURHrcR1/wGmyIBlsXK55Wsq3TW9tWoDzIou2q3qw==" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>