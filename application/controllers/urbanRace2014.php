<?php
/**
* 
*/
class UrbanRace2014 extends CI_Controller
{
	public function index(){
		$data['title'] = "Urban Race - Urban Race 2014";
		$data['main'] = "urbanRace2014";
		$data['underHeader'] = 'image';
		$data['errorMessage'] = '';
		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>