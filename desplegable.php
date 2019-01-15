<?php 

function debug($value)
{

echo '<pre>';
var_dump($value);
echo "</pre>";

}

$languages[] = 'español';
$languages[] = 'ingles';
$languages[]= 'frances';
?>
<form action="proceso.php" method="GET">
<select name="languages">
		<?php 
$i=0;
		while($i <count($languages)){  ?>
		<option value="<?php echo $i; ?>"><?php echo $languages[$i]; ?></option>
		
		<?php 
$i++;
	} ?>
	</select>

	<input type="submit" name="Submit" value="Enviar " /> 
	</form>