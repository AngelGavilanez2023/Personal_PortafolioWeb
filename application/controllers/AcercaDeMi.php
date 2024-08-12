<?php 
class AcercaDeMi extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function acercaDeMi() {
        $data['activePage'] = 'Sobre Mí';
        $this->load->view('header', $data);
        $this->load->view('acercaDeMi/acercaDeMi');
        $this->load->view('footer');
    }

}

?>