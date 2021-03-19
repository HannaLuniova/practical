<?php
//$x = '567';
//$a='/^[0-9]{3}$/';
//if (preg_match($a,$x)){
//    echo "yes";
//}else{
//    echo "no";
//}
//$text='8012345678';
//$regexp='/^8([0-9]{3})([0-9]{6})/';
//$matches=array();
//if (preg_match($regexp,$text,$matches)){
//    echo $matches[1];
//    var_dump($matches);
//}else{
//    echo "no";
//}

//$a = 'а123вг';
//$b = '/^([а-яёА-Яё]{1})(\d{3})([а-яёА-Яё]{2})$/u';
//if (preg_match($b, $a)) {
//    echo "yes";
//} else {
//    echo "no";
//}

$correctNumbers = [
    '84951234567',  '+74951234567', '8-495-1-234-567',
    ' 8 (8122) 56-56-56', '8-911-1234567', '8 (911) 12 345 67',
    '8-911 12 345 67', '8 (911) - 123 - 45 - 67', '+ 7 999 123 4567',
    '8 ( 999 ) 1234567', '8 999 123 4567'
];
$b="/\+\(\)\-\d/";
foreach ($correctNumbers as $value){
    preg_match($b,$value);
}