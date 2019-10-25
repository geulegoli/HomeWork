<?php

function sumAP($firstnumber){ // сумма арифметической прогрессии
	define('NUMBER', 100);
 		$sum = ($firstnumber + NUMBER)* NUMBER / 2;
 		echo $sum;
}

//$sum = array_sum(range($firstnumber,NUMBER));

?>