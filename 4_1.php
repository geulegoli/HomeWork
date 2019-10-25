<?php

$numbers = array(26, 56, 4, 9, 0, 3, 66);

function bignumb($array){
 if($n = count($array)){
  		sort($array);
  		print_r($array[$n-1]);
 	}
}
bignumb($numbers);

$petnams = array("Rayon", "Iz", "Soul", "Suri", "Noel");

function longstr($array_string){
if($n = count($array_string)){
	natsort($array_string);
  		print_r($array_string[$n-$n]);
 	}
}

longstr($petnams);

?>
