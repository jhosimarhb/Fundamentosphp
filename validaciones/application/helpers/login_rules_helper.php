<?php    
fuction getLoginRules(){
	return array(

        array(
             'field'=>'email',
             'label' => 'correo',
             'rules' => 'required|trim',
             'error' => array(
             	'required' => 'El %s es requerido',
             ),
        ),
     array(
     	'field'=> 'password',
     	'label'=>'contraseña',
     	'rules'=> 'required|trim',
     	'error'=> array(
     		'required' => 'El %s es requerido',
     	),


     ),
	);
}


?>