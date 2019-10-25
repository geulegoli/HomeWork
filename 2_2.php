<?php

 $handle = fopen("php://stdin","r");
 $fizz = trim(fgets($handle));
 $buzz = trim(fgets($handle));
 $untilthat = trim(fgets($handle));


 $i=1;
do {
   if($i % $fizz == 0 && $i % $buzz == 0){
     echo 'FB';
   }elseif($i % $fizz == 0){
     echo 'F';
   } elseif($i % $buzz == 0){
      echo 'B';
   }else{
     echo $i;
   }
   $i++;
} while ($i<=$untilthat);

?>