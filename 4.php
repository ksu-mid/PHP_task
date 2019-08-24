<?php 
$arr = [];
while(count($arr) < 50) {
    array_push($arr, rand(0,100));
}

$new_arr = [];
foreach ($arr as $number) {
    if ($number < 72) {
    array_push($new_arr, $number);
    }
}
