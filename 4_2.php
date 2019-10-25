<?php
//countcharl - count characters in selected line/string
function countcharl($array,$key){
$key_place = array_search($key, array_keys($array));
$newarr = array_slice($array,$key_place,1); // how many take after value of key
$string = implode($newarr); // convert array to string
$res = str_replace(' ', '', $string); //res - result, delete all spaces between words
$chars = strlen($res); // calculate how many symbols is there
echo $chars; // showing result
}

$catstat = array("Rayon is hungry", "Iz is resting", "Soul is sleeping", "Suri mauying", "Noel is eating");

$key = 2;
countcharl($catstat,$key);

//Нужно посчитать, сколько раз в итоге встретился символ, суммарно по всем строкам
function calcelem($array,$element){ //calculate how many time met element in all lines
 	$resource = implode($array);
 	$result = substr_count($resource,$element);
 	echo $result;
}

$elementos = 'i';
calcelem($catstat,$elementos);


?>
