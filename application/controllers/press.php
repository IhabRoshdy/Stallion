<?php
/**
* 
*/
class Press extends CI_Controller
{
	public function index(){
		$data['title'] = "Urban Race - Press";
		$data['main'] = "press";
		$data['underHeader'] = 'image';
		$data['errorMessage'] = '';
		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>