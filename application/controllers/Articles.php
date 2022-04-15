<?php
defined('BASEPATH') OR exit('No direst script access allowed');

class Articles extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('article_model');
        $this->uploadPath = 'uploads/images/';
        $this->load->helper('text');
        $this->load->library('ion_auth');
    }

    public function index() {
        redirect('/', 'location');
    }

    public function detail($id) {
        if(!is_numeric($id)) {
            redirect('/', 'location');
        }

        if($this->ion_auth->logged_in()) {
            $data['user_id'] = $this->ion_auth->user()->row()->id;
        }

        $this->load->library('typography');
        $data['heading'] = "Game Information";
        $this->load->model('article_model');

        $data['results'] = $this->article_model->get_game_detail($id);

        $this->load->view('includes/header', $data);
        $this->load->view('article_detail_view', $data);
        $this->load->view('includes/footer');
    }

    public function write() {
        if(!$this->ion_auth->logged_in()) {
            redirect('/auth/login/');
        } else {
            $data['author_id'] = $this->ion_auth->user()->row()->id;
        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger mt-2">', '</div>');
        $this->form_validation->set_rules('game', 'Game','required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[1]|max_length[3000]');

        // $data = array(); 

        if($this->form_validation->run() == FALSE) {
            $this->load->view('includes/header');
            $this->load->view('article_write_view');
            $this->load->view('includes/footer');

        } else {
            if(!empty($_FILES['image']['name'])) {
                $config['upload_path'] = $this->uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $data['game'] = $this->input->post('game');
                    $data['description'] = $this->input->post('description');

                    $uploadData = $this->upload->data();
                    $uploadedImage = $uploadData['file_name'];

                    $source_path = $this->uploadPath.$uploadedImage;
                    $thumb_path = $this->uploadPath.'thumb/';
                    $thumb_width = 180;
                    $thumb_height = 180;

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $source_path;
                    $config['new_image'] = $thumb_path;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = $thumb_width;
                    $config['height'] = $thumb_height;

                    $this->load->library('image_lib', $config);

                    if($this->image_lib->resize()) {
                        $thumbnail = $thumb_path.$uploadedImage;
                        $thumb_image_size = $thumb_width.'x'.$thumb_height;
                    }

                    $data['img_name'] = $uploadedImage;
                    $this->article_model->insert_data($data);
                }
            }
            $this->session->set_flashdata('message', '<i class="material-icons mr-2">insert_emoticon</i>Insert Successfully');

            redirect('home/index', 'location');
        }
    }

    public function edit($id) {
        if(!is_numeric($id)) {
            redirect('/', 'location');
        }

        if(!$this->ion_auth->logged_in()) {
            redirect('/auth/login/');
        } else {
            $data['author_id'] = $this->ion_auth->user()->row()->id;
        }

        if(!$this->article_model->check_owner($id, $data['author_id'])) {
            $this->session->set_flashdata('message', '<i class="material-icons mr-2">thumb_up</i>Nice Try!');
            redirect('home/index', 'location');
        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger mt-2">', '</div>');
        $this->form_validation->set_rules('game', 'Game','required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[1]|max_length[3000]');

        $this->load->model('article_model');

        if($this->form_validation->run() == FALSE) {
            $data['results'] = $this->article_model->get_game_detail($id);
            $this->load->view('includes/header');
            $this->load->view('article_edit_view', $data);
            $this->load->view('includes/footer');
        } else {
            $data['game'] = $this->input->post('game');
            $data['description'] = $this->input->post('description');
            $this->article_model->edit_data($data, $id);

            $this->session->set_flashdata('message', '<i class="material-icons mr-2">edit</i>Edit Successful');
            redirect('home/index', 'location');
        }
    }

    public function delete($id) {
        if(!$this->ion_auth->logged_in()) {
            redirect('/auth/login/');
        } else {
            $data['author_id'] = $this->ion_auth->user()->row()->id;
        }

        if(!$this->article_model->check_owner($id, $data['author_id'])) {
            $this->session->set_flashdata('message', '<i class="material-icons mr-2">thumb_up</i>Nice Try!');
            redirect('home/index', 'location');
        }

        $this->load->model('article_model');
        $this->article_model->delete_data($id);

        $this->session->set_flashdata('message', '<i class="material-icons mr-2">remove_circle</i>Delete Successful');
        redirect('home/', 'location');
    }
}