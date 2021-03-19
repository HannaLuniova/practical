<?php
$list = [
    ["Коньки"],
    ["Лыжи"],
    ["Сноуборд"],
    ["Хоккей"],
    ["Катаюсь на санках с горки"],
    ["Леплю снеговиков"],
    ["Играю в снежки"],
    ["Только мандаринопоедание"]
];


function theList($b)
{
    $table = '<table border=1 >';

    for ($i = 0; $i < count($b); $i++) {

        $table .= "<tr>";

        for ($j = 0; $j < count($b[$i]); $j++) {

            $table .= "<td>" . $b[$i][$j] . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";

    return $table;
}

echo theList($list);
                                // echo 'Количество проголосовавших' . '<br>' . '<br>' . $data[$answer];
