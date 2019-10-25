<?php

/**$fizz = 3;
$buzz = 5;
$untilthat = 45;**/

 $handle = fopen("php://stdin","r");
 $fizz = trim(fgets($handle));
 $buzz = trim(fgets($handle));
 $untilthat = trim(fgets($handle));

for ($i = 1; $i<=$untilthat; $i++) {
      echo($i % $fizz == 0 && $i % $buzz == 0 ? "FB" : ($i % $fizz == 0 ? "F" : ( $i % $buzz == 0 ? "B" :"$i")));
}

?>