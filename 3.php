<?php 
$arr = [];
while (count($arr) < 100){
  array_push($arr, rand());
}

/*while (list($index, $number) = each($arr)){
  echo "$index => $number n";
}*/

foreach($arr as $number) {
  echo $number;
  echo "\n";
}
