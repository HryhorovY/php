<?php

echo "порахувати довжину масиву [1, 2, 3, 7, 31, 4, 1, 8, 6]";
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$length = count($arr);
echo "Довжина масиву:";
print_r($length);


// перемістити перші 4 элементи масиву до кінця масиву
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

$a = array_slice($arr, 0, 4);
$b = array_slice($arr, 4);

$arr1 = array_merge($b, $a);

print_r($arr1);

// отримати суму 4,5,6 елемента
$a = $arr[3] + $arr[4] + $arr[5];
print_r($a);


$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];
$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];

//знайти усі елементи, які відсутні у першому масиві і присутні у другому
$diff1 = array_diff($secondArr,$firstArr);
print_r($diff1);

//знайти усі елементи, які відсутні у другому масиві і присутні у першому
$diff2 = array_diff($firstArr,$secondArr);
print_r($diff2);

//знайти усі елементы значення якіх співпадают
$result = array_intersect($firstArr,$secondArr);
print_r($result);

//знайти усі елементы значення якіх  відрізняеться
$diff3 = array_diff_assoc($secondArr, $firstArr);
print_r($diff3);

//зі вкладеними масивами поки що не розібрався