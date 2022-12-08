<?php

echo '課題１：';

$name="FUJITA KOUDAI";

if ($name == "FUJITA KOUDAI"){
    echo '私は',$name,'です';
    echo"\n";
} else{
     echo "あなたの名前ではありません";
  }
  
 echo '課題2：';
 $total = 0;
 for( $i=0; $i<=10000; $i++ ){
     $total += $i; 
 }
 echo $total;
 echo"\n";
 
  echo '課題3：';
  echo"\n";
 $fruits = array("apple" ,"orange", "grape", "banana", "peach");
 
 foreach($fruits as $fruits){
     echo $fruits;
     echo "\n";
 }
 
   echo '課題4：';
   echo"\n";
  
  $start=1;
  $end =100;
  
  for($i = $start; $i <= $end ;$i++){
      if($i % 5 == 0){
          echo $i;
          echo "\n";
      }
  }