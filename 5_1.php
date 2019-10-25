<?php

define('A', 5);

$n = 0;
	for($i=1;$i<=100;$i++){
		if($i % A == 0){
		$n+=1;
	}
}

 echo $n;
