<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index() {
        $data['heading'] = "Games";
        $this->load->model('article_model');
        $data['results'] = $this->article_model->get_game();

        $this->load->view('includes/header', $data);
        $this->load->view('home_view', $data);
        $this->load->view('includes/footer');
    }
}