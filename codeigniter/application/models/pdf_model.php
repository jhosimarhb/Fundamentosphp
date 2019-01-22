<?php 

class Pdf_Model extends CI_Model {
    
  public function get_products(){
                                  
    $query = $this->db->get('productos');
    return $query->result();
    
      }    
  
}

?>