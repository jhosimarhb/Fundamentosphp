<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
</head>    
<body>
<div align="center">
<?=heading($title, 3);

echo anchor('pdf_controller/export','Exportar a pdf').br(2);

$this->table->set_heading('Nombre', 'Cantidad');
    
     foreach ($content as $results) {
          $this->table->add_row($results->nombre, $results->cantidad);    
     }

$tmpl = array ('table_open'=>'<table border="1" cellpadding="2" cellspacing="1">');
$this->table->set_template($tmpl); 
echo $this->table->generate(); 
?>
</div>    
</body>
</html>