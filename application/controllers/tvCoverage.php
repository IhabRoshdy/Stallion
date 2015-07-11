<?php
/**
* 
*/
class TvCoverage extends CI_Controller
{
	public function index(){
		$data['title'] = "Urban Race - TV Coverage";
		$data['main'] = "tvCoverage";
		$data['underHeader'] = 'image';
		$data['errorMessage'] = '';
		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>