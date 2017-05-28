<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class subject_code extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('subject_model');
    }

    public function index() {
        //$this->load->view('mainpage');
    }

    public function add_subject() {
        //add teacher data to database
        $data = array(
            'sub_id' => $this->input->post('sub_id'),
            'sub_name' =>$this->input->post('sub_name'),
            'sub_name_ar' =>$this->input->post('sub_name_ar'),
            'class' =>$this->input->post('sub_class')
        );
        if ($this->subject_model->add_data($data)){
            redirect('welcome/index');
        }
    }

    public function update_teacher() {
        
    }

    public function delete_teacher() {
        
    }

    public function find_teacher() {
        
    }

}
