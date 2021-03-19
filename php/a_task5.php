<?php
echo '<br>';

$a = 5;
$b = 7;
$c = $a + $b;
$d = $a * $b;
echo $c;
echo '<br>';
echo $d;
?>

<?php
echo '<br>';

$a = 4;
$b = 6;
$c = $a * $a + $b * $b;
echo $c;
?>

<?php
echo '<br>';

$a = 3;
$b = 5;
$c = 8;

$d = ($a + $b + $c) / 3;
echo $d;
?>

<?php
echo '<br>';

$x = 2;
$y = 6;
$z = 9;

$c = ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
echo $c;
?>


<?php
echo '<br>';

$a = 17;
$b = 54;

$c = 0.4 * 17  + 0.84 * 54;

echo $c;
?>


<?php
echo '<br>';

$a = 123;
$a = '123';

$c = $a[0] + $a[1] + $a[2];

echo $c;
?>


<?php
echo '<br>';

$a = 10;
if ($a > 10) {
    $a = $a + 100;
} else {
    $a = $a - 30;
}
echo $a;
?>

<?php
echo '<br>';

$a = 8;

if ($a / 2 == ceil($a / 2)) {
    $a = $a / 2;
} else {
    $a = $a * 3;
}
echo $a;
?>

<?php
echo '<br>';

$a = 52;

if ($a > 50) {
    echo $b = pow($a, 2);
} elseif ($a > 10 and $a < 30) {
    echo 0;
} else {
    echo 'ошибка';
}
?>

<?php
echo '<br>';

$a = 15;
$b = 4;

if ($a > $b) {
    echo $a;
} else {
    echo $b;
}
?>

<?php
echo '<br>';

$a = 19;
$b = 143;

if ($b - $a = 100) {
    echo "No";
} else {
    echo "Yes";
}
?>

<?php
echo '<br>';

$a = 19;
$b = 143;

if ($a - $b > 20) {
    echo "No";
} else {
    echo "Yes";
}
?>

<?php
echo '<br>';

$a = 123;
$a = '123';
$b = $a[2] . $a[1] . $a[0];

echo $b;
?>

<?php
echo '<br>';

