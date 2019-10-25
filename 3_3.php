<?php

function FizzBuzz($fizz,$buzz,$untilthat){

  	for ($i = 1; $i<=$untilthat; $i++) {
  		echo($i % $fizz == 0 && $i % $buzz == 0 ? "FB" : ($i % $fizz == 0 ? "F" : ( $i % $buzz == 0 ? "B" :"$i")));
 	}
}

//Пользуясь имеющимися наработками написать функцию, которая из исходных данных одной строки получает результаты fizzbuzz. 

function FBff($handle){ // Fizz Buzz from file - name of function
 	$string = implode($handle);//var_dump($string);
 	$info = explode(" ",$string);//var_dump($info);
 	$fizz = $info[0];
 	$buzz = $info[1];
 	$untilthat = $info[2];
 FizzBuzz($fizz,$buzz,$untilthat);
}


function for_each_lane($handle){
$newfile = fopen('newfile.txt','w+');
 	$count = count($handle);

for($key = 0; $key<=$count; $key++){
   		$newarr = array_slice($handle,$key,1);
   		$a = FBff($newarr); // var_dump -> Null
  	 	fwrite($newfile, $b);//echo($a . "<br/>"); //не работает
 	}
}

// Пока не нашла ответа почему не записывается в файл. В чем причина. Отображается с echo без проблем.


?>