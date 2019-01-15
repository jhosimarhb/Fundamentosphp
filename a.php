<?php

$var = array(
 16,
 124,
145,
123,
45,
56,
);

//for ($i=0; $i< count($var) ; $i++) { 
	# code...
//echo "<p>".$var[$i]."</p>";
//}

foreach ($var  as $key => $value) {
	# code...
echo "{$key} => {$value} ";
//	var_dump($value); 

}
?>