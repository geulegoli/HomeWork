<?php


//Задача: Даны два массива строк. Написать функцию, которая, сравнивая между собой первые,вторые, третьи элементы массивов (строки) и считая разницу длин по модулю (разница всегда положительна),высчитает макисмальную разницу и вернет ее.


$fruta = array('manzana','melocoton','platano', 'fresa');
$verduras = array('berenjena','ajo','cebolla','pimiento');

//$fruta = array('cereza','kiwi','coco');
//$verduras = array('zanahoria','pepino','calabacin');
function cmaxdif($array1,$array2){
		$count = count($array1);
	//echo $len_of_first;
			for($key = 0;$key<=$count; $key++){
				$len_of_first = strlen($array1[$key]);
				$len_of_second = strlen($array2[$key]);
					if($len_of_first > $len_of_second){
						$result1 = $len_of_first - $len_of_second;				
					}elseif($len_of_second>$len_of_first){
						$result2 = $len_of_second - $len_of_first;				
				}
				
			}

	echo max($result1,$result2);
}


cmaxdif($fruta,$verduras);

?>