<!-- задача№1 -->
<?php
echo "<br\n>";

$var = 'hello';

echo $var[0];
echo $var[1];
echo $var[4];
?>

<!-- задача№2 -->
<?php
echo "<br\n>";

// $second = 60;
// $hour = 60;
// $x = $second * $hour;
// echo $x;
echo 60 * 60;

?>

<!-- задача№3 -->
<?php
echo "<br\n>";

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;

echo $var;
?>

<!-- Работа со строками -->
<?php
echo "<br\n>";

$a = 3;
echo $a;
?>

<?php
echo "<br\n>";

$text1 = 'Привет,';
$text2 = 'Мир!';
$a = $text1 . $text2;

echo $a
?>

<?php
echo "<br\n>";

$name = 'Hanna';
$a = 'hello' . $name;

echo $a
?>

<?php
echo "<br\n>";

$age = 36;
$a = 'мне' . $age . 'лет';
echo $a
?>

<!-- Обращение к символам строки -->
<?php
echo "<br\n>";

$text = 'abcde';

echo $text[0];
echo $text[2];
echo $text[4];

?>

<?php
echo "<br\n>";

$text = 'abcde';
$a = '!';
$text[0] = $a;

echo $text;
?>

<?php
// ?

?>


<!-- Практика -->

<?php
echo "<br\n>";

echo 60 * 60;
echo '<br>';

echo 60 * 60 * 24;
echo '<br>';

echo 60 * 60 * 24 * 30

?>

<?php
echo "<br\n>";

$a = 2;
$a = $a * 2;
echo $a;
?>

<!-- Работа с присваиванием и декрементами -->
<?php
echo "<br\n>";

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
?>

<?php
echo "<br\n>";

$text = 'я';
$text .= 'хочу';
$text .= 'знать';
$text .= 'PHP!';

echo $text;
?>

<?php
echo "<br\n>";

$var = 10;
$var++;
$var++;
$var--;

echo $var;
?>

<?php
echo "<br\n>";

$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;

echo $var;
?>