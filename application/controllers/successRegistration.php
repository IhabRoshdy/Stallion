<?php
/**
* 
*/
class successRegistration extends CI_Controller
{
	public function index($id=0){
		$data['title'] = 'Urban Race - Success Registration';
		$data['main'] = 'successRegistration';
		$data['underHeader'] = 'image';
		$data['id'] = $id;
		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>