<?php
echo '<br\n>';

$a = 10;
if ($a == 10) echo 'верно';
else echo 'неверно';
?>
<br>
<?php
echo '<br\n>';

$min = 14;

if ($min >= 0 and $min <= 14) echo '1';
if ($min >= 15 and $min <= 30) echo '2';
if ($min >= 31 and $min <= 45) echo '3';
if ($min >= 46 and $min <= 59) echo '4';

?>

<br>
<?php
echo '<br\n>';

$lang = 'ru';

if ($lang == 'ru') {
    $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
}
if ($lang == 'en') {
    $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
}
var_dump($arr);
?>

<br>
<?php
echo '<br\n>';

$lang = 'en';

switch ($lang) {
    case 'en':
        $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
        break;
    case 'ru':
        $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
        break;
}
var_dump($arr);
?>

<br>
<?php
echo '<br\n>';

$lang = 'ru';

$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];
var_dump($arr[$lang]);
?>

<!-- Работа с if-else -->

<br>
<?php
echo '<br\n>';

$a = 1;

if ($a == 0) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = 0;
if ($a > 0) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = -3;
if ($a < 0) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = 1;
if ($a >= 0) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = -3;
if ($a <= 0) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = 1;
if ($a !== 0) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = 'тест';

if ($a == 'test') echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = '1';

if ($a === 1) echo 'верно';
else echo 'неверно';

?>

<!-- Работа с empty и isset -->

<br>
<?php
echo '<br\n>';

$a = '';

if (empty($a)) echo 'верно';
else echo 'неверно';

?>
<br>
<?php
echo '<br\n>';

$a = 1;

if (!empty($a)) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = 2;

if (isset($a)) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = 2;

if (!isset($a)) echo 'верно';
else echo 'неверно';

?>

<!-- Работа с логическими переменными -->

<br>
<?php
echo '<br\n>';

$varr = 'true';

if ($varr == 'true') echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$varr = 'true';

if (!$varr) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$varr = 'true';

if (!$varr) echo 'неверно';
else echo 'верно';

?>

<br>
<?php
echo '<br\n>';

$varr = 'true';

if ($varr !== 'true') echo 'неверно';
else echo 'верно';

?>

<!-- Работа с OR и AND -->

<br>
<?php
echo '<br\n>';

$a = 2;

if ($a > 0 and $a < 5) echo 'верно';
else echo 'неверно';

?>

<br>
<?php
echo '<br\n>';

$a = 0;

if ($a == 0 or $a < 2) echo $a = $a + 7;
else echo $a = $a / 10;

?>

<br>
<?php
echo '<br\n>';

$a = 1;
$b = 3;

if ($a <= 1 and $b >= 3) echo $a = $a + $b;
else echo $a = $a - $b;

?>

<br>
<?php
echo '<br\n>';

$a = 1;
$b = 3;

if ($a > 2 and $a < 11 or $b >= 6 and $b < 14) echo 'верно';
else echo 'неверно';
?>

<!-- На switch-case -->

<br>
<?php
echo '<br\n>';

$num = 2;
$result = null;

switch ($num) {
    case 1:
        $result = 'Зима';
        break;
    case 2:
        $result = 'Весна';
        break;
    case 3:
        $result = 'Лето';
        break;
    case 4:
        $result = 'Осень';
        break;
    default:
        $result = 'Неверное значение!';
}
echo $result;
?>

<!-- Задачи -->

<br>
<?php
echo '<br\n>';

$day = 12;

if ($day >= 0 and $day <= 10) echo 1;
if ($day >= 11 and $day <= 20) echo 2;
if ($day >= 21 and $day <= 30) echo 3;

?>

<br>
<?php

echo '<br\n>';

$month = 7;

if ($month >= 0 and $month <= 3) echo 'зима';
if ($month >= 4 and $month <= 6) echo 'весна';
if ($month >= 7 and $month <= 9) echo 'лето';
if ($month >= 10 and $month <= 12) echo 'осень';

?>

<br>
<?php

$a = 'abcde';

if ($a[0] === 'b') echo 'да';
else echo 'нет';
?>

<br>
<?php

$a = '12345';

if ($a[1] == 1) echo 'да';
else echo 'нет';

?>

<br>
<?php

$a = '123';

$sum = $a[0] + $a[1] + $a[2];

echo $sum;

?>

<br>
<?php

$a = '123456';

$sum1 = $a[0] + $a[1] + $a[2];
$sum2 = $a[3] + $a[4] + $a[5];

if ($sum1 == $sum2) echo 'верно';
else echo 'неверно';

?>

<br>
<?php

$year=1984;

if ($year % 400 == 0) {
    echo "$year год - Высокосный";
} else {
    echo "$year год - Не высокосный";
}
?>