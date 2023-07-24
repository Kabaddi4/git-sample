<?php

//課題1
function Times($num) {
    return $num * 2;
}

echo Times(3);
echo "\n";

//課題2
function Add($x, $y) {
    return $x + $y;
}

echo Add(5, 11);
echo "\n";

//課題3
function Result($array) {
    return array_product($array);
}

$array = [1,3,5,7,9];
echo Result($array);
echo "\n";

//課題4

function max_array($arr) {
  $max = $arr;
  return $max;
}


$arr[] = [4,3,5];
//var_dump($arr);
print_r(max_array($arr));

/*function max_array($arr){
  $max_number = $arr[0];
  //var_dump($max_number);
  foreach($arr as $a){
    var_dump($a);
  }

  return $max_number;
}
$test_array = [4,3,5];
max_array($test_array);*/

//課題5
$str = "<h1>hello</h1>";
echo strip_tags($str);
echo "\n";

$phone = array('galaxy', 'iphone', 'xperia');
array_push($phone, 'pixel', 'sharp');
print_r($phone);
echo "\n";

$color1 = ['red', 'blue'];
$color2 = ['white', 'black'];

$color_mix = array_merge($color1, $color2);
print_r($color_mix);