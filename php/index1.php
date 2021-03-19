<?php

echo PHP_VERSION;
//----------------------
define("PI", 3.14);
echo "<br>";
echo PI;
echo "<br>";
echo defined("PI");
//----------------------
echo "<br>";
#остаток при делении
$x = 32;
$z = 12;
$ostatok = $x % $z;
echo $ostatok;
# 12/7=1*7+5  остаток 5
# 10/5=0      остаток 0
# 11/6=1*6+5  остаток 5
//------------------------
echo "<br>";
$str_1 = "<b>one</b><input type=\"text\"/>";
$str_2 = "two";
echo $str_1 . " " . $str_2 . '"' . "\"\\" . '\'';
//-------------------------
echo "<br>";
//Логические операции
$x = 12;
$y = 34;
$z = 4.25;

$bool_1 = $x == $z; //проверяем на равенство / !=/ true=1, false=0
$bool_2 = $x > $y; //false
echo $bool_1 . "<br>" . $bool_2;
$bool_3 = !($x == $y); // ! меняет значение в скобках true/false
$bool_4 = $x == $y || $z < $y; // true= true||true (true||false)
$bool_5 = $z != $y && $x < $y; // true= true && true (FALSE= false && true)
$bool_6 = $z != $X ^ $Y > $Z; // true= true ^ false(FALSE= true ^ true  ЛИБО false^false )
$bool = !($x != $y && $z < $x) || $x == $y; //false
//---------------------------
echo "<br>";
//оператор эквивалентности
$string = "example";
$num = 0;
$bool_1 = $string == true; // выведет 1 true
$bool_2 = $num == ""; //выведет 1 true
$bool_3 = $string === true; //false
$bool_4 = $num === ""; //false
//---------------------------
echo "<br>";

$x = 10;
$y = 5;
$x == $y ? $a = "Да" : $a = "Нет"; //короткая запись
echo "<br>" . $a;
