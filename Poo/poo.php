<?php

//clase es un modelo que se utilisa para crear objetos que comparte un mismo comportamiento

class Automovil{
	//propiedades son las caracteristicas que puede tenerun objeto 

	public $marca;
	public $modelo;

	//metodo es el algoritmo asociado a un objeto 

	public function mostrar(){
echo "<p>hola soy un $this->marca,modelo $this->modelo</p>";
	}
}

$a = new Automovil();
$a -> marca ="toyota ";
$a -> modelo="corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca ="hundai ";
$b -> modelo="vision";
$b -> mostrar();


?>