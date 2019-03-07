<?php error_reporting(1) ?>

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
        $arr = [
            ['name' => 'Vasya',
            "age" => 25]
            ,[
            'name' => 'Stepa',
            'age' => 25
            ],'test' => 'proverka',
        ];

        
        // echo '<pre>';
        // print_r($arr);
        // echo '</pre>';
        // $arr2 = [];

        // $array1 = array("color" => "red", 2, 4);
        // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);


        // $result = array_rand($array1, 2);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($array1);
        // echo '</pre>';
        $city  = "San Francisco";
        $state = "CA";
        $event = "SIGGRAPH";
      

        $result = compact('city', 'state', 'event');

        extract($result);

        echo $city;
        echo '<br>';
        echo $state;

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    ?>
    <!-- 
        count() = длина миссива;
        array_diff(arr1, arr2) = вернёт arr1 с уникальными элементами которых нету в остальных массиваx;
        array_intersect(arr1, arr2) = вернёт массив с повторяющимися елементами;
        array_key_exists('key', search_array) = проверяет наличие индекса , значиения в массиве (true ,fasle);
        array_keys($arr) = возвращает масив ключей arr;
        array_values($arr) = возвращает массив значений arr;
        array_merge($arr1, $arr2) = сливает массивы в один , возвращает новый массив , одинаковые строковые значения                                    перезаписывает;
        array_rand($arr1, 2) = выбирает случайный ключ массива;
        compact($str, $str2) = создаёт асоциативный массив из переменных;
        extract($arr) = распаковывает в переменные из асоциативного массива;

    
    
    
    
    -->
</body>
</html>