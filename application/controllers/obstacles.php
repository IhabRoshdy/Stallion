<?php
/**
* 
*/
class Obstacles extends CI_Controller
{
	public function index(){
		$data['title'] = "Urban Race - Obstacles";
		$data['main'] = "obstacles";
		$data['underHeader'] = 'image';
		$data['errorMessage'] = '';
		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>