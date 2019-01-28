<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once "vendor\autoload.php";

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');

    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $dato['string'] = 'hola mundo';
        $this->load->view('Pdf/formulario');
    }
    public function descargar()
    {
        $data = [];
        //para que ponga la fecha en el nombre del documento
        $hoy = date("dmyhis");
        //$html es la que va a contener todo lo que se va amandar al pdf
        $html = $this->input->post('pdf');
        $pddf = new \Mpdf\Mpdf();
        $mpdf->writeHTML($html);
        $mpfFilePath = "cipdf_" . $hoy . ".pdf";
        $mpdf->Output($pdfFilePath, "D");
    }

}
