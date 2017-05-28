<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->library('mpdf/mpdf');
	}
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('report');
	}
	
}
