<?php 

header('Content-Type: text/html; charset=utf-8');

// http://php.net/manual/ru/ref.strings.php
// http://php.net/manual/ru/ref.mbstring.php


$str = 'Иван Иванович Иванов';
$data = explode(' ', $str);

print_r($data);

?>