<?php defined('BASEPATH') OR exit('No se permite acceso direct al script ');
class Menu{
	private $arr_menu;
	public function __construct($arr){
		$this->arr_menu = $arr;
	}
	public function construirmenu(){
		$ret_menu = "<nav><ul>";
		foreach ($this->arr_menu as $opcion) {
			# code...
			$ret_menu .="<li>".$opcion."</li>";
			
		}
		$ret_menu .= "</ul></nav>";
		return $ret_menu;
	}
}

?>