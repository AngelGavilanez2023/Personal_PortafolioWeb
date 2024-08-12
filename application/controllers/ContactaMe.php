<?php 

class ContactaMe extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function contactaMe() {

        $data['activePage'] = 'Contáctame';

        $this->load->view('header', $data);
        $this->load->view('contactaMe/contactaMe');
        $this->load->view('footer');
    }

}
?>

