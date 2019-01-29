<?php 
class Producto extends CI_Controller{
	function __construct(){
		parent::__construct();
		//llamando el modelo para pasar datos y realizar consultas
		$this->load->model('Producto_model');
	}

	function index(){
		if($this->session->userdata('login')){
			$data= array('definir' => 2);
			$this->load->view('frontend/Head');
			$this->load->view('frontend/Producto', $data);
			$this->load->view('frontend/Footer');
		}else{
			redirect(site_url('Inicio'));
		}
	}

	function guardar_datosCotroller(){
		if($this->input->is_ajax_request()){

			$nombre_pruducto = $this->Producto_model->setNombre_producto($this->input->post("nombre"));
			$descricion_producto = $this->Producto_model->Producto_model->setDescripcion_producto($this->input->post("descricion"));
			$valor_producto = $this->Producto_model->setValor_producto($this->input->post("valor"));
			$id_productoFK = $this->Producto_model->setId_productoFK($this->input->post("id_categoria"));

			$config =[
				"upload_path"=> "./asset/images/uploads",
				"allowed_types"=> "png|jpg"
			];
			$this->load->library("upload", $config);

			if($this->upload->do_upload('imagen_producto')){
				$data = array("upload_data" => $this->upload->data());

				$imagen_producto = $this->Producto_model->setImagen_producto($data['upload_data']['file_name']);
				$datos =array(

					"nombre_producto" => $nombre_producto,
					"descripcion_pruducto" => $descricion_producto,
					"valor_producto" => $valor_producto,
					"imagen_producto"=> $imagen_producto,
					"id_categoria" => $id_productoFK
				);
			}else{
				echo $this->upload->display_errors();
			}

			if($this->Producto_model->guardar($datos)){
				echo 'Producto registrado correctamente';
			}else{
				echo 'Producto no registrado';
			}

		}else{
			show_404();
		}
	}

	function actualizar_datosController(){
		if($this->input->is_ajax_request()){

			$id = ($this->Producto_model->post("idsele"));
			$nombre = ($this->Producto_model->post("nombresele"));
			$descricion = ($this->Producto_model->post("descripcionsele"));
			$valor = ($this->Producto_model->post("valorsele"));

			$data =array(

				'nombre_producto' => $nombre,
				'descricion_producto' => $descricion,
				'valor_producto' => $valor
			);
			if ($this->Producto_model->actualizar_datos($id, $datos)){
				echo 'Producto actualizado';
			}else{
				echo 'Producto no actualizado';
			}
		}else {
			show_404();
		}
	}

	function mostrar_datosController(){
		if($this->input->is_ajax_request()){
			$buscar = $this->Producto_model->setNombre_producto($this->input->post("buscar"));
			$numeropagina= $this->input->post("numeropagina");
			$cantidad = $this->input->post('cantidad');

			$inicio = ($numeropagina -1)* $cantidad;
			$datos = array(

				"producto" => $this->Producto_model->mostrar_datos($inicio,$cantidad),
				"totalregistro" => count($this->Producto_model->mostrar_datos->mostar_datos($buscar)),
				"cantidad" => $cantidad
			);
			echo json_encode($datos);
		}else{
			show_404();
		}
	}

	function eliminar_datosController(){
		if($this->input->is_ajax_request()){
			$id = $this->Producto_model->setId_producto($this->input->post("id"));
			if($this->Producto_model->eliminar_datos($id)){
				echo 'Registro eliminado';

			}else{
				echo 'Registro no eliminado';
			}
		}else{
			show_404();
		}
	}

	function mostrarConcategoria_datosController(){
		if($this->input->is_ajax_request()){
			$buscar = $this->Producto_model->setId_producto($this->input->post("buscar"));

			$numeropagina = $this->input->post("numeropagina");
			$cantidad = $this->input->post("cantidad");

			$inicio = ($numeropagina -1)+ $cantidad;
			$datos = array(

				"producto" => $this->Producto_model->mostrar_datosCategoria($inicio,$cantidad),
				"totalregistro"=> count($this->Producto_model->mostrar_datosCategoria($buscar)),
				"cantidad" => $cantidad
			);
		}else{
			show_404();
		}
	}
}

 ?>

