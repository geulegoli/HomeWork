<?php

$fruta = array(' manzana is apple ','melocoton','platano', 'fresa');
$verduras = array('berenjena','ajo','cebolla','pimiento','patata');

//$fruta = array('cereza','kiwi','coco');
//$verduras = array('zanahoria','pepino','calabacin');
function cmaxdif($array1,$array2){

		$count1 = count($array1);
		$count2 = count($array2);
		$count = min($count1,$count2); // we gonna use more little one, because that way we have pairs to compare.

		
			for($key = 0;$key<=$count; $key++){

				$var1 = $array1[$key];
				$nospace1 = str_replace(' ','',$var1);
				$len_of_first = strlen($nospace1); // to get our string without spaces

				$var2 = $array2[$key];
				$nospace2 = str_replace(' ','',$var2);
				$len_of_second = strlen($array2[$key]);// this part of code repeat for both arrays :(

					if($len_of_first > $len_of_second){
						$result1 = $len_of_first - $len_of_second;	//difference between first and second			
					}elseif($len_of_second>$len_of_first){
						$result2 = $len_of_second - $len_of_first;	// or difference between second and first			
				}
				
			}

	echo max($result1,$result2); // use function max to find the biggest difference
}


cmaxdif($fruta,$verduras);


?>