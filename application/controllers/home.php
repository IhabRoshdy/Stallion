<?php
/**
* 
*/
class Home extends CI_Controller
{
	public function index(){
		$data['title'] = "Urban Race";
		$data['main'] = "home";
		$data['underHeader'] = 'slider';
		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>