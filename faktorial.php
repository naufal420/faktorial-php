<?php
while (true) {
  echo "=======  Program Faktoria l=========" . PHP_EOL;
  $a = readline("Masukkan Angka : ");
  $b = $a - 1;
  $total = $a * $b;
  if($a != 1){
    for($a >= 1; $b--;){
      if($b == 0 ){
        break;
      }
      $total *= $b;
     
    } 
  }else{
    $total = $a;
  }
  if ($b == 0) {
    echo $total . PHP_EOL;
  }
}