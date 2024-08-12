<?php 

class Proyectos extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function proyectos() {
        $data['activePage'] = 'Proyectos';
        $this->load->view('header',$data);
        $this->load->view('proyectos/proyectos');
        $this->load->view('footer');
    }

}
?>