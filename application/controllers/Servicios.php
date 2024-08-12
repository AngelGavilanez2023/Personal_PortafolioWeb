<?php 
class Servicios extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function servicios() {

        $data['activePage'] = 'Servicios';
        
        $this->load->view('header', $data);
        
        $this->load->view('servicios/servicios');
        $this->load->view('footer');
    }

}
?>