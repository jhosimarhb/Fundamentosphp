<?php

$name='gustavo cerati';
$age =25;
$has_kids = true;
define('__COUTRY', 'Argentina');
$hourly_rate =59.99;
$partner = new stdClass();
$partner->name = 'Charly albert';
$partner->age=21;
?>

<!DOCTYPE html>
<html lang="en">
    <body>
    	<?php echo $name;?>
        <div class="container">
            <h2><span>500</span> Server </h2>
            <?php  echo $age ?>
<p>Oops, something went wrong.</p>
            <?php echo $has_kids ? 'si' : 'no';?>
            <p>Oops, something went 
            	<?php echo __COUTRY;?>  wrong.<br /><br />
            	<?php echo $partner->name; ?>
            	Try to refresh this page or feel free to contact us if the 
            	<?php echo $partner->age; ?>
            	 problem persists.</p>
        </div>
    </body>
</html>


