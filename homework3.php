<?php

echo '課題１：';

function double($x ) {
    $result = 2 * $x;
    return $result;
}

echo double(9);
echo "\n";

echo '課題2：';

function add($a, $b) {
    $total = $a + $b;
    return $total;
}
echo add(18, 19);
echo "\n";

echo '課題3：';

function maltiplication($arr) {
    $total= 1;
    for($i = 0; $i < count($arr); $i++) {
        $total *= $arr[$i];
    }
    return $total;
}
echo maltiplication(array(1, 3, 5, 7, 9));
echo "\n";

echo '課題4：';

function max_array($arr) {
    $max_number = $arr[0];    // 初期値設定
    foreach($arr as $a) {
        if ($a > $max_number) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(1, 2, 4, 5, 7, 8, 9, 11, 13, 3, 19));
echo "\n";

echo '課題5：';
echo "\n";

// strip_tagsを使ってみる・・・HTMLタグの除去
$str= "<h1>--strip_tagsを使ってみる--<h1>".
"\n".
"<p>HTMLタグの取り外し機能<p>".
"\n".
"<a href=>--strip_tags 終了--</a>".
"\n";
echo strip_tags($str) ;

// array_pushを使ってみる・・・配列に複数の要素を追加したい場合に使う
$array = array("~array_push開始", "A", "B", "C", );
array_push($array, "D", "E", "array_push終了~", ); 
var_dump($array);

// array_mergeを使ってみる・・・複数の配列を結合

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
$array4 = array_merge($array1, $array2, $array3);
print_r($array4);

/*   time・・・現在時刻のUNIXタイムスタンプを取得
　 mktime・・・指定した時刻のUNIXタイムスランプを取得*/

$time1 = time();
$time2 = time() + (3 * 24 * 60 * 60);
echo "現在のUNIXタイムスランプ:". $time1;
echo "\n";
echo "３日後のUNIXタイムスランプ；". $time2;
echo "\n";

// date を使ってみる
echo "現在時刻は";
echo date('Y-m-d H:i:s');
echo "である";
echo "\n";

$date1 = strtotime('+10 second');
echo date('Y-m-d H:i:s', $date1);
echo "\n";

$date2 = strtotime('-3 days');
echo date('Y年m月d日 H時i分s秒', $date2);
echo "\n";