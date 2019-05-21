<?php
// 課題1
$name =  "さくら";
if ($name == "さくら") {
  echo "私はさくらです";
}else {
  echo "さくらではありません";
}
 ?>

<?php
//課題2
$total = 0;
for ($i=0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
 ?>

<?php
//課題3
$fruits = array("apple", "lemon", "orange", "banana", "grape");
foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}
 ?>

<?php
//課題4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
   echo $i;
   echo "\n";
  }
}
 ?>
