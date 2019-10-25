<?php

define('LIMIT',100);
 
  for ($k = 2; $k<=LIMIT;$k++){
   	$array[$k]= $k;
  	}

   	$k=2;

   	while($k*$k <=LIMIT){

    		if(isset($array[$k])){

     			$var = $k;

     			while($var * $k <=LIMIT){

      				unset($array[$var*$k]);
      				$var++;
     			}
 		}

   	$k++;
   
}
 print_r($array);

 ?>