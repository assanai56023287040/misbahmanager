<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_code extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Teacher_model');
    }

    public function index() {
    }

    public function add_teacher() {
        //add teacher data to database
        $m_t_id  = array (
            'kind' => $this->input->post('t_status'),
            'class_teach' => $this->input->post('class_teach'),
            'admin_box' => $this->input->post('admin_box')
        );
        $t_id = $this->make_t_id($m_t_id);
        //convert status
        $status_en = $this->convert_status_eng($t_id);
        $data = array(
            't_id' => $t_id,
            't_name_ar' => $this->input->post('t_name_ar'),
            't_last_name' => $this->input->post('t_last_name'),
            't_name_th' =>$this->input->post('t_name_th'),
            't_address' =>$this->input->post('t_address'),
            't_tel' =>$this->input->post('t_tel'),
            'username' =>  $this->input->post('username'),
            'password' => $this->input->post('password'),
            'status' => $status_en,
            'class' => $this->input->post('t_class')
        );
        if ($this->Teacher_model->add_data($data)){
            redirect('welcome/index');
        }
    }

    public function update_teacher() {
        
    }

    public function delete_teacher() {
        
    }

    public function select_teacher() {
        $result['teacher'] = $this->Teacher_model->select_all_teacher();
        $content['content'] = $this->load->view('show_teacher',$result,TRUE);
        $this->load->view('main_structure',$content);
        }
    
    public function login(){
		$this->load->model('Teacher_model');		
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');		
		
		if($this->Teacher_model->check_login($username, $password)){
                        $user = $this->Teacher_model->select_teacherdata($username,$password);
                        $status_th = $this->convert_status($user[0]['status']);
                        $session_now = array (
                                'id' => $user[0]['t_id'],
                                'fname' => $user[0]['t_name_ar'],
                                'lname' => $user[0]['t_last_name'],
                                'username' => $user[0]['username'],
                                'password' => $user[0]['password'],
                                'status' => $user[0]['status'],
                                'status_th' => $status_th
                            );
			if($user[0]['status'] == 'admin'){
                            //admin session
                            $this->session->set_userdata('user',$session_now);//หลังจากตรวจ sec
				redirect('Teacher_code/admin_page');
                                
			}else if($user[0]['status'] == 'teacher_class'){	
                            // teacher class session
                            $this->session->set_userdata('user',$session_now);
                            redirect('Teacher_code/teacher_class_page');
			}
                        else{
                            //teacher subject session
                            $this->session->set_userdata('user',$session_now);
                            redirect('Teacher_code/teacher_subject_page');
                        }
		}else{
			redirect('Teacher_code/login_fail');
		}
	}
        public function admin_page(){
            $content['content'] = $this->load->view('admin','',TRUE);
            $this->load->view('main_structure',$content);
        }
        public function teacher_class_page(){
            $content['content'] = $this->load->view('admin','',TRUE);
            $this->load->view('main_structure',$content);
            
        }
        public function teacher_subject_page(){
            $content['content'] = $this->load->view('admin','',TRUE);
            $this->load->view('main_structure',$content);
        }
        public function login_fail(){
            echo "<script>alert('รหัสผู้ใช้ หรือ รหัสผ่าน ผิด  กรุณาเข้าสู่ระบบใหม่อีกครั้ง');</script>";
            $this->load->view('mainpage');
        }
        public function logout(){
            $this->session->unset_userdata('user');
            redirect('Welcome/index');
        }
        public function convert_status($status = NULL){
            if(!empty($status)){
                switch ($status){
                    case 'admin' : $status = "ผู้ดูแลระบบ"; break;
                    case 'teacher_class' : $status = "อาจารย์ประจำชั้น";break;
                    default : $status = "อาจารย์ประจำวิชา";    break;
                }
                return $status; 
            }
        }
        
        public function convert_status_eng($t_id){
            $kind = substr($t_id, 0, 1);
            switch ($kind){
                case 1 : $status_en = "admin";  break;
                case 2 : $status_en = "teacher_class";  break;
                default : $status_en = "teacher_subject"; break;
            }
            return $status_en;
                    
        }

        public function make_t_id ($m_t_id = NULL){
            if($m_t_id['admin_box'] == TRUE){
                $a = 1;
                $b = $m_t_id['kind'];
                if($m_t_id['kind'] == 2){
                    $c = $m_t_id['class_teach'];
                }else{
                    $bf = $a.$b;
                    $num = $this->Teacher_model->select_like($bf);
                    $c = $num;
                    $c++;
                }
            }else{
                $a = $m_t_id['kind'];
                if($a == 2){
                    $b = 0;
                    $c = $m_t_id['class_teach'];
                    
                }else{
                    $bf = $this->Teacher_model->select_like($a);
                    $base = 300+$bf; 
                    $base++;
                    }
            }
            if(!empty($base))
                $t_id = $base;
            else
                $t_id = $a.$b.$c;
            
            return $t_id;
        }

}
