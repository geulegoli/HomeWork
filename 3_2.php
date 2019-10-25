<?php
//Функцией прочесть из файла все строки.

$file = fopen('file2.txt','r+');
getinfo($file);


function getinfo($handle){

 		while(! feof($handle)){

  			$result = fgets($handle);
  			echo ($result . "<br>");
 	}
}

fclose($file);

 

//Другой функцией померять длину каждой строки.

function calcline($array){

  	$i = count($array);
   		for($key = 0; $key<=$i-1; $key++){
    			$newarr = array_slice($array,$key,1);
    			$string = implode($newarr);
    			$result = str_replace(' ', '', $string);
    			$chars = strlen($result);
    			echo($chars . "<br>");
   	}
 }



//Третьей функцией записать в совершенно другой файл только те строки, которые длиннее средней длины по файлу.



$file1 = 'file2.txt'; 


function selectline($file){

$newfile = fopen('newfile.txt','w+');
$text = file($file);
 	$lenghts = array_map('strlen',$text);//var_dump($lenghts);
 	$count = count($text);
 	$middle = array_sum($lenghts) / $count;

  	for($key = 0; $key<=$count; $key++){

  		$newarr = array_slice($text,$key,1); 
   		$lenght = implode(array_map('strlen',$newarr));

    			if($lenght >= $middle) {

     				$string = implode($newarr);
   					fwrite($newfile,$string);
  				}
 		}
}

?>