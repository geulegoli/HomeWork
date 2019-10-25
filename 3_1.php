<?php

$file = fopen('file.txt', 'r+');

$a = orf($file);

fclose($file);

$newfile = fopen('newfile.txt','w+');
$file1 = 'file.txt';

$b = wf($file1,$newfile);

// function for read and show file

function orf($handle){
while(!feof($handle)){
  		echo(fgets($handle));
  	}
}

//function for write in file with missing every second line

function wf($handle,$handle1){
 	$info = file($handle);
  		foreach($info as $key => $name){
   			if($key%2==0){
   			fwrite($handle1,$name); //write result in new file;
   		}
  	}
  	echo"You create file with selected information inside.";
  }

?>
