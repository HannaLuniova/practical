<?php

$str = "text e@some.domain-domain.com text 3sfdfg@mail.ru text lhgf@mail.ru";
$pater = '/\b[\da-z+.-_]+@[a-z-.]+\b/iu';
$match = [];
echo preg_match_all($pater, $str, $match);
print_r($match);
