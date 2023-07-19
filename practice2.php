<?php
/*$height = 160;

if ($height < 150) {
    echo "150未満の方はご乗車できません";
} else {
    echo "ご乗車ください";
}*/

//課題1
$name = "masato";

if ($name == "masato") {
    echo "私は masato です";
} else {
    echo "あなたの名前ではありません";
}

//課題2
$total = 0;


for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//課題3
$fruits = array("grape", "apple", "orange", "kiwi", "melon");

foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

//課題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}