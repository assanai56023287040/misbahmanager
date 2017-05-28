<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('mainpage');
	}
	public function page1()
	{
		$this->load->view('a2');
	}
	public function addteacher()
	{
		$this->load->view('form_add_teacher');
	}
	public function addsubject()
	{

		$this->load->view('form_add_subject');
	}
	public function addstudent()
	{

		$this->load->view('form_add_student');
	}
}
