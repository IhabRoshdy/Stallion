<?php
/**
* 
*/
class Registration extends CI_Controller
{
	public function index(){
		$this->loadRegistrationView();
	}

	private function loadRegistrationView(){
		$data['title'] = "Urban Race - Registration";
		$data['main'] = "registration";
		$data['underHeader'] = 'image';
		$this->load->vars($data);
		$this->load->view('template');
	}

	public function register(){
		//Rules
		$this->form_validation->set_rules('name', 'Name', 'required|xss_clean|trim');
		$this->form_validation->set_rules('age', 'Age', 'required|numeric|xss_clean|trim');
		$this->form_validation->set_rules('mobileNumber', 'Mobile Number', 'required|numeric|max_length[11]|min_length[11]|is_unique[vendor_guest_list.mobile]|xss_clean|trim');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|valid_emails|xss_clean|trim');
		$this->form_validation->set_rules('disclaimer', 'Disclaimer', 'callback_disclaimer_check');

		if($this->form_validation->run() == FALSE){
			$this->loadRegistrationView();
		}
		else{
			$registeredId = $this->MRegister->register();
			$this->load->helper('sms_helper');
			send_sms_registration($_POST['mobileNumber'], $registeredId);
		}
	}

	function disclaimer_check(){
		if(isset($_POST['disclaimer'])){
			return true;
		}
		else{
			$this->form_validation->set_message('disclaimer_check', 'You have to certify you are physically fit');
			return false;
		}
	}
}
?>