<?php

$arr = [1, 2, 3, 4, 5];
foreach ($arr as $key) {
    echo $key * $key . '<br>';
}
?>

<br>
<?php

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
foreach ($arr as $a => $b) {
    echo $a . '-' . $b . '<br>';
}
?>


<br>
<?php
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}
?>

<br>
<?php

$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $a) {
    echo $a . '<br>';
}
?>

<br>
<?php

$arr = [10, 20, 15, 17, 24, 35];
$result = 0;

foreach ($arr as $elem) {
    $result = $result + $elem;
}

echo $result;
?>

<br>-----
<?php

$i = 1;

while ($i <= 5) {
    echo $i;
    $i++;
}
?>

<br>
<?php

$i = 1;

for ($i = 1; $i <= 5; $i++) {
    echo $i;
}

?>

<!-- Работа с foreach -->

<?php
echo "<br\n>";

$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem) {
    echo $elem . '<br>';
}
?>

<?php
echo "<br\n>";

$arr = [1, 2, 3, 4, 5];
$result = 0;

foreach ($arr as $elem) {
    $result = $result + $elem;
}
echo $result;

?>
235ghjhmhjf
<?php
echo "<br\n>";

$arr = [1, 2, 3, 4, 5];
$result = 0;

foreach ($arr as $elem) {
    $result = $result + $elem * $elem;
}
echo $result;
?>

<?php
echo "<br\n>";

$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];

foreach ($arr as $elem => $b) {
    echo $elem . '-' . $b . '<br>';
}
?>

<?php
echo "<br\n>";

$arr = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400];

foreach ($arr as $a => $b) {
    echo $a . '-зарплата' . $b . 'долларов' . '<br>';
}
?>

<!-- Циклы while и for -->

<?php
echo "<br\n>";

$i = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}

?>

<?php
echo "<br\n>";

$i = 11;
while ($i <= 33) {
    echo $i;
    $i++;
}

?>

<?php
echo "<br\n>";

$i = 0;

for ($i = 0; $i <= 100; $i += 2) {
    echo $i;
}
?>

<?php
echo "<br\n>";

$sum = 0;

for ($i = 0; $i <= 5; $i++) {
    $sum += $i;
}
echo $sum;
?>

<!-- Задачи -->


<?php
echo "<br\n>";

$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $ar) {
    if ($ar > 3 and $ar < 10) {
        echo $ar;
    }
}
?>

<?php
echo "<br\n>";

$arr = [1, 2, -4, -6, 9];
$sum = 0;

foreach ($arr as $b) {
    if ($b > 0) {
        $sum += $b;
    }
}
echo $sum;
?>

<?php
echo "<br\n>";

$arr = [1, 2, 5, 9, 4, 13, 4, 10];

foreach ($arr as $a) {
    if ($a == 4) {
        echo 'Есть';
        break;
    }
}
?>

