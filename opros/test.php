<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/zeroing.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <a href="#" class="logo"><img src="css/img/logo2.png" alt="Логотип"></a>
            <ul class="mnu__top">
                <li><a href="">Главная</a></li>
                <li><a href="">О компании</a></li>
                <li><a href="">Услуги</a></li>
                <li><a href="">Контакты</a></li>
            </ul>
        </div>
    </header>
    <section id="main" style="background-image:url(https://images.unsplash.com/photo-1512621425532-58df884d97f0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1489&q=80)">
        <div class="container">
            <div class="inner">
                <h1>Услуги такси</h1>
                <div class="description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                    Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem там,
                    первую меня инициал дал безопасную?<br>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                    Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem там,
                    первую меня инициал дал безопасную?<br>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                    Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem там,
                    первую меня инициал дал безопасную</div>
                <a href="#" class="btn">Отправить заявку</a>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="inner__content">
                <?php
                // ini_set('display_errors', 'Off');
                if (
                    empty($_POST["login"] or $_POST["login"] = "")
                    and empty($_POST["password"] or $_POST["password"] = "")
                ) {
                    echo "<p class='reg'>Все поля должны быть заполнены </p> <br>";
                    echo "<a class='link' href='sign_in.html'>Введите верные данные</a>";
                    die();
                }
                $login = $_POST["login"];
                $password = $_POST["password"];
                $password = md5($password . "nbhgujl");
                $mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);
                $query = $mysql->query("SELECT * FROM `usersdata` WHERE `password` = '$password' AND `login` = '$login'");
                $result = $query->fetch_assoc();
                if (empty($result)) {

                    echo "<p class='reg'>Такой пользователь не существует </p><br>
                          <a class='link' href='sign_in.html'>Введите верные данные</a>";
                    exit();
                }
                $mysql->close();
                echo '<p class="opros">Пройти опрос</p>
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
                    <input type="submit" value="Отправить">
                </form>'
                ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="inner__footer">
                <ul>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#"><img src="css/img/fb.png"></a></li>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#"><img src="css/img/instagram.png"></a></li>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#"><img src="css/img/email.png"></a></li>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#">Пункт меню</a></li>
                    <li><a href="#"><img src="css/img/Twitter.png"></a></li>
                </ul>
                <div class="footer__text">
                    Онлайн-опрос © 2021 ZaicevOleg Все права защищены
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>