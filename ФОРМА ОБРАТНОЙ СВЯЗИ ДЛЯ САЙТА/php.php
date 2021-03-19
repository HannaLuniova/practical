<?php
//получаем данные с элементов формы
$login = $_POST["login"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$tel = $_POST["tel"];

//обрабатываем полученные данные

$login = htmlspecialchars($login); //преобразование символов в сущности(мнемоники)
$pass = htmlspecialchars($pass);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);

$login = urldecode($login); //декодирование URL
$pass = urldecode($pass);
$email = urldecode($email);
$tel = urldecode($tel);

$login = trim($login); //удаление пробельных символов с обеих сторон
$pass = trim($pass);
$email = trim($email);
$tel = trim($tel);

//отправляем ланные на почту

if (mail(
    "kakoinibydmeail@mail.ru",
    "Новое письмо с сайта",
    "Логин:" . $login . "\n" .
        "Пароль:" . $pass . "\n" .
        "Email:" . $email . "\n" .
        "Телефон:" . $tel,
    "From:no-reply@mydomain.ru \r\n"
)) {
    echo ("Письмо успешно отправлено!");
} else {
    echo ("Есть ошибки!Проверьте данные...");
}
