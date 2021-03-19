<!-- Примеры решения задач -->
<!-- Задача №1 -->

<?php
echo "<br\n>";

$a = ['привет,', 'мир', '!'];

echo $a[0] . $a[1] . $a[2];
?>

<!-- Задача №2 -->
<?php
echo "<br\n>";

$a = ['привет,', 'мир', '!'];
$text = $a[0] . $a[1] . $a[2];
echo $text;
?>

<!-- Задача №3 -->
<?php
echo "<br\n>";

$a = ['привет,', 'мир', '!'];
$text = 'пока,' . $a[1] . $a[2];

echo $text;
?>

<!-- Задача №4 Ассоциативные массивы  -->
<?php
echo "<br\n>";

$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];

echo $arr['Вася'];
?>

<!-- Задача №6 Многомерный массив -->
<?php
echo "<br\n>";

$arr = [
    'ru' => ['голубой', 'красный', 'зеленый'],
    'en' => ['blue', 'red', 'green'],
];
echo $arr['en'][1];
?>

<!-- Работа с массивами -->
<?php
echo "<br\n>";

$arr = ['a', 'b', 'c'];

echo $arr[1];
?>


<?php
echo "<br\n>";

$arr = ['2', '5', '3', '9'];
$a = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $a;
?>


<!-- Ассоциативные массивы -->
<?php
echo "<br\n>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo $arr['c'];
?>

<?php
echo "<br\n>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$a = $arr['a'] + $arr['b'] + $arr['c'];
echo $a;
?>

<?php
echo "<br\n>";

$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];

echo $arr['Коля'];
echo $arr['Петя'];

?>

<?php
echo "<br\n>";

$arr = ['пн' => 1, 'вт' => 2, 'ср' => 3, 'чт' => 4, 'пт' => 5, 'сб' => 6, 'вс' => 7,];
$day = $arr['сб'];

echo $day;
?>

<!-- Многомерные массивы -->
<?php
echo "<br\n>";

$arr = [
    'cms' => ['joomla', 'wordpress', 'drupal'],
    'colors' => ['blue' => 'голубой', 'red' => 'красный', 'green' => 'зеленый']
];
echo $arr['cms'][0];
echo $arr['cms'][2];
echo $arr['colors']['green'];
echo $arr['colors']['red'];
?>

<?php
echo "<br\n>";

$arr = [
    'ru' => ['понедельник', 'вторник', 'среда',  'четверг', 'пятница', 'суббота',  'воскресенье',],
    'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
$lang = 'en';
$day = $arr[$lang][6];
echo $day;

// echo $arr['ru'][3];
// echo $arr['en'][2];
?>


<?php
echo "<br\n>";

$arr = ['1', '2,', 'c+', 'd'];

echo $arr[0] + $arr[1] . $arr[2] . $arr[3];

?>