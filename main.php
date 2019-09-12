1. 
<?php 
if (date("G")%2 == 0) {
echo '<body style="background-color:green">';
}
else {
echo '<body style="background-color:orange">';
}

// или 

echo (date("G")%2 == 0) ? '<body style="background-color:green">' : '<body style="background-color:orange">';

2. 
$arr = [];
while (count($arr) < 100){
  array_push($arr, rand());
}

3.
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

4.
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

5.
$arr = [1, 8, 10, 88];
$new_str = implode(",", $arr);
echo $new_str;

6.
$number_1 = rand (45,233);
$number_2 = rand(1,99) / 100;
$result = $number_1 + $number_2;
echo $result;

7.
echo substr_count("Ехал Грека через реку", "ре");

8.
$arr = array("first"=>45, "second"=>76, "third"=>12);
print_r(array_values($arr));

9.
$arr = array("first"=>45, "second"=>76, "third"=>12);
print_r(array_keys($arr));

10.
$arr = [45, "тест", 100];
array_shift($arr);
array_push($arr, "тест2");

11.
function getPlus10($num){
  echo $num+10;
}

12.
function col(){
  $args = func_num_args();
  echo $args;
}

13.function op($num1, $num2, $operator){
  switch($operator){
      case "+":
      return $num1 + $num2;
      break;
      case "-":
      return $num1 - $num2;
      break;
      case "/":
      return $num1 / $num2;
      break;
      case "*":
      return $num1 + $num2;
      break;
      default:
      echo "Unknown operator";
   }
}

