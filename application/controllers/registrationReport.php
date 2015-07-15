<?php
/**
* 
*/
class registrationReport extends CI_Controller
{
	public function index(){
		$config = array();
		$config['base_url'] = site_url().'/registrationReport/index';
		$config['total_rows'] = $this->MRegister->getAllRegisteredCount();
		$config['per_page'] = 50;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = round($choice);

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['title'] = "Urban Race - Registration Report";
		$data['main'] = "registrationReport";
		$data['underHeader'] = 'image';
		$data['errorMessage'] = $errorMessage;
		$data['registered'] = $this->MRegister->getAllRegistered($config["per_page"], $page);

		$data["links"] = $this->pagination->create_links();

		$this->load->vars($data);
		$this->load->view('template');
	}
}
?>