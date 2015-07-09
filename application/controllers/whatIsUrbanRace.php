<?php
/**
* 
*/
class WhatIsUrbanRace extends CI_Controller
{
	public function index(){
		$data['title'] = "Urban Race - What is Urban Race";
		$data['main'] = "whatIsUrbanRace";
		$data['underHeader'] = 'image';
		$data['errorMessage'] = '';
		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>