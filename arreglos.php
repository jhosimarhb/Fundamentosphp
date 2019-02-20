<?php

function avalability( $is_available)
{
    if ($is_available){

    echo 'Si';
}else
{
    echo 'No';
}

}

function say_year()
{
    return date('Y');
}

$user_data['name']= 'Steve';
$user_data['age'] =65;
$user_data['company']= 'apple';
$user_data['availability']= true;

$famous_tech_people[] =[
'name' => 'rodrigo',
'address' => 'santa clrara ',
'availability' => true ,
'email' => 'rodrigo@ple'
];

$famous_tech_people[] =[
'name' => 'victor',
'address' => 'santa  ',
'availability' => true ,
'email' => 'castillo@ple'
];

$famous_tech_people[] =[
'name' => 'cesar',
'address' => 'san diego  ',
'availability' => true ,
'email' => 'cesar@ple'
];


?>

<!DOCTYPE html>
<html lang="en">
    <body>
    	<?php 

foreach ($famous_tech_people as $person) { 
	# code...

    	
    	?> 
    	<tr>
    		<td><?php echo $person['name']?></td>
    		<td><?php echo $person['address'] ?></td>
    		<td><?php echo $person['email'] ?></td>
    		<td><?php 
avalability( $person['availability']);
    		 ?></td>
    	</tr>
    <?php } ?>
<p> <?php echo say_year(); ?> </p>
    	
    </body>
</html>
