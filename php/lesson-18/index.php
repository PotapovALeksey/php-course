<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php 


// http://php.net/manual/ru/ref.strings.php
// http://php.net/manual/ru/ref.mbstring.php


// $str = 'Иван Иванович Иванов';
// $data = explode(' ', $str);
// $str2 = join(', ', $data);
// print_r($str2);
// echo '<br>';

// $str3 = "\n<p>Hello</p>\n";
// $str3 .= "\n<p>world</p>\n";
// print_r(trim($str3 ));

// $str = 'test';
// echo(trim($str, 't')); 

// $password = 'qwerty12345';
// echo(password_hash($password, PASSWORD_DEFAULT));
// $str = "Hello\n world";
// echo nl2br($str);

$str = "Привет! [i]Меня[/i] зовут [b]Вася[/b]!!!s";
$search  = ['[b]', '[/b]', '[i]', '[/i]'];
$replace  = ['<b>', '</b>', '<i>', '</i>'];
$str = str_replace($search , $replace , $str);

echo $str;

?>

<!--Функции со строками

explode(' ', $arr) - разбивает по разделителю , возвращает массив;
implode(' ', $arr) - разбивает массив в строку;
join(' ', $arr) - тоже самое что implode;
trim($str, ",") - удаляет пробелы вначале и в конце строки; , вторым параметром принимает любой символ который необходимо удалить;
ltrim($str) - удаляет пробелы вначале ;
rtrim($str) - удаляет пробелы в конце строки;
password_hash($str, PASSWORD_DEFAULT) - зашифровываиет строку;
nl2br($str) - сохраняет переводы строк;

str_replace($search , $replace , $str) - ищет в строке символ и заменяет его на указанный;

-->

</body>
</html>