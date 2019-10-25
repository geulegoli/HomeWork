<?php

$handle = fopen("php://stdin","r");
$username = trim(fgets($handle));

if($username == 'Fable'){
 
   echo "Welcome back Fable!"; 
}
 elseif($username == 'Akapulko'){
 
   echo "Welcome back Akapulko";
 
}else{
 
   echo "Check your username please";
}


switch($username){
 case'Fable';
  	echo "Welcome back Fable!";
  	break;
 case'Akapulko';
 	echo "Welcome back Akapulko";
           break;
 default:
           echo "Check your username please";
           break;
}

