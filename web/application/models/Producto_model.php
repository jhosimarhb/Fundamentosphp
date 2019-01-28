<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Producto_modelo extends CI_Model
{

    private $id_producto;
    private $nombre_producto;
    private $descripcion_producto;
    private $valor_producto;
    private $imagen_producto;
    private $id_productoFK;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId_productoFK()
    {
        return $this->id_productoFK;
    }

    public function setId_pruducto($id_productoFK)
    {
        $this->id_productoFK = $id_productoFK;
    }

    public function getId_producto()
    {
        return $this->id_producto;
    }

    public function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function getNombre_producto()
    {
        return $this->nombre_producto;
    }

    public function getDescripcion_producto()
    {
        return $this->descripcion_producto;
    }

    public function getValor_producto()
    {
        return $this->valor_producto;
    }

    public function getImagen_producto()
    {
        return $this->imagen_producto;
    }

    public function setNombre_producto($nombre_producto)
    {
        $this->nombre_producto = $nombre_producto;
    }

    public function setDescripcion_profucto($descripcion_producto)
    {
        $this->descripcion_producto = $descripcion_producto;
    }

    public function setValor_producto($valor_producto)
    {
        $this->valor_producto = $valor_producto;
    }

    public function setImagen_producto($imagen_producto)
    {
        $this->imagen_producto = $imagen_producto;
    }

    public function guardar()
    {
        $sql = "INSERT INTO producto (id_producto ,nombre_producto, descripcion_producto,valor_producto,imagen_producto ,id_categoria)"
            . " VALUES ('null', '$this->nombre_producto', '$this->descripcion_producto','$this->valor_producto','$this->imagen_producto','$this->id_productoFK')";
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrar_datos $inicio = false, $cantidadregistro = false)
    {
    $this->db->like("nombre_producto", $this->nombre_producto);
    if ($inicio !== false && $cantidadregistro !== false) {
        $this->db->limit($cantidadregistro, $inicio);
    	}

    	$this->db->order_by("id_producto","desc");
    	$consulta = $this->db->get("producto");
    	return $consulta->result();

	}

	function actualizar_datos(){
		$sql = "UPDATE producto SET nombre_producto = '$this->nombre_producto' , descripcion_producto = '$this->descripcion_producto' "
                . " , valor_producto ='$this->valor_producto' WHERE id_producto = '$this->id_producto'";
        $this->db->query($sql);
        if($this->db->affected_rows()>0){
        	return true;
        }else {
        	return false;
        }
	}

	public function eliminar_datos(){
		$sql ="DELETE FROM producto WHERE id_producto = $this->id_producto";
		$this->db->query($sql);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function mostrar_datosCategoria($inicio =FALSE, $cantidadregistro = FALSE){

		$this->db->where("id_categoria",$this->id_productoFK);
		if($inicio !== FALSE && $cantidadregistro !== FALSE){
			$this->db->limit($cantidadregistro, $inicio);
		}
	}

}
