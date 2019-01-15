<?php    

function debug($value)
{

echo '<pre>';
var_dump($value);
echo "</pre>";

}


$languages =isset($_GET['languages'])?$_GET ['languages'] : 0;
switch ($languages) {
	case '0':
		# code...
	echo "Buen dia";
		break;
	
	case '1':
		# code...
	echo "Good day";
		break;
	
	case '2':
		# code...

	echo 'Bon jour';
		break;
	
	
}

?>