<?php

// $arr = ['Привет ', 'мир!'];
// $text = $arr[0] . $arr[1];
// echo $text;

?>

<?php
// echo '<br>';

// $arr = ['Привет ', 'мир!'];
// $arr[0] = 'Пока';
// var_dump($arr);

?>

<?php
// echo '<br>';

// $arr = [];

// for ($i = 1; $i <= 10; $i++) {
//     echo  $arr[] = $i;
// }
?>

<?php
// echo '<br>';

// $arr = [];

// for ($i = 10; $i > 0; $i--) {
//     echo  $arr[] = $i;
// }
?>

<?php
// echo '<br>';

// $a = 1;

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }
?>

<?php
// echo '<br>';

// $i = 1;

// while ($i <= 10) {
//     echo $i;
//     $i++;
// }
?>

<?php
// echo '<br>';

// $num = 1000;
// $i = 0;

// while ($num > 50) {
//     $num = $num / 2;
//     $i++;
// }
// echo $num .'<br>'. $i;
?>

<?php
// echo '<br>';

// $b = 0;

// for ($i = 1; $i <= 5; $i++) {
//     $b = $b + $i;
// }
// echo $b;

?>

<?php
// echo "<br\n>";

// $sum = 0;

// for ($i = 0; $i <= 5; $i++) {
//     $sum += $i;
// }
// echo $sum;
?>

<?php
$arr=['10', '20', '30', '50', '235', '3000'];

foreach ($arr as $b) {
  if ($b[0]==1 or $b[0]==2 or $b[0]==5) {
    echo $b.'<br>';
  }
}
?>

<?php

$year = 2000;

if (($year % 4 == 0 and !$year / 100) or $year % 400 == 0) {
    echo "високосный";
} else {
    echo " не високосный";
}

?>