<?php
echo "課題1"."\n";

function a($x){
  $result = $x*2;
  return $result;
}

echo a(2)."\n";
 ?>

<?php
echo "課題2"."\n";

function f($a, $b){
  $result = $a + $b;
  return $result;
}

echo f(2, 3)."\n";
 ?>

<?php
echo "課題3"."\n";

$arr = array(1, 3, 5, 7, 9);
function func($arr){
  $result = 1;
  foreach ($arr as $value) {
    $result *= $value;
  }
  return $result;
}

echo func($arr)."\n";

echo "課題4"."\n";

function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
  if ($max_number < $a) {
    $max_number = $a;
  }
  }
  return $max_number;
}

echo max_array($arr)."\n";
 ?>

 <?php
echo "課題5";
echo "\n"."------------------------------------------"."\n";

// strip_tags : 文字列から HTML および PHP タグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
// <p> と <a> は許可
echo strip_tags($text, '<p><a>');
echo "\n"."------------------------------------------"."\n";

// array_push : 一つ以上の要素を配列の最後に追加する
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r ($stack);
echo "\n"."------------------------------------------"."\n";

// array_merge : ひとつまたは複数の配列をマージする（まとめる）
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

// 二番目の配列の要素を最初の配列に追加したい (最初の配列に存在する要素は上書きせず、添字も変更しない) 場合は、配列結合演算子 + を使います。
$array1 = array("color" => "red", 0 => 2, 1 => 4);
$array2 = array(0 => "a", 1 => "b", "color" => "green", "shape" => "trapezoid", 2 => 4);
$result = array_merge($array1 + $array2);
print_r($result);
// array_merge() で配列以外の型を扱う例
$beginning = 'foo';
$end = array(1 => 'bar');
$result = array_merge((array)$beginning, (array)$end);
print_r($result);
echo "\n"."------------------------------------------"."\n";

// time — 現在の Unix タイムスタンプを返す
// mktime — 日付を Unix のタイムスタンプとして取得する
// date — ローカルの日付/時刻を書式化する
date_default_timezone_set('UTC');
echo time()."\n";
echo  mktime()."\n";
echo date("M-D-Y-h:i:s A")."\n";
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo date("M-d-Y", mktime(0, 0, 0, 5, 1, 1992))."\n";
echo date( "l", mktime(0, 0, 0, 5, 1, 1992) )."\n";

echo "\n"."------------------------------------------"."\n";

 ?>
