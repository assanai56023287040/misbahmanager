<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class student_code extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('student_model');
    }

    public function index() {
        //$this->load->view('mainpage');
    }

    public function add_student() {
        //add teacher data to database
        $data = array(

            's_id' => $this->input->post('s_id'),
            's_first_name' => $this->input->post('s_fname'),
            's_last_name' => $this->input->post('s_lname'),
            's_nick_name' =>$this->input->post('s_nname'),
            's_address' =>$this->input->post('s_address'),
            's_tel' =>$this->input->post('s_tel'),
            'class' =>$this->input->post('st_class'),
            'class_start' =>$this->input->post('class_start'),
            'year_start' =>$this->input->post('year_start'),
            'teacher_t_id' =>$this->input->post('teacher_t_id') 
        );
        if ($this->student_model->add_data($data)){
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
