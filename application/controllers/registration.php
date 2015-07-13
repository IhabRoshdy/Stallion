<?php
/**
* 
*/
class Registration extends CI_Controller
{
	public function index(){
		$this->loadRegistrationView();
	}

	private function loadRegistrationView($errorMessage=''){
		$data['title'] = "Urban Race - Registration";
		$data['main'] = "registration";
		$data['underHeader'] = 'image';
		$data['errorMessage'] = $errorMessage;
		$this->load->vars($data);
		$this->load->view('template');
	}

	public function register(){
		try{
			//Rules
			$this->form_validation->set_rules('name', 'Name', 'required|xss_clean|trim');
			$this->form_validation->set_rules('age', 'Age', 'required|numeric|xss_clean|trim');
			$this->form_validation->set_rules('mobileNumber', 'Mobile Number', 'required|numeric|max_length[11]|exact_length[11]|min_length[11]|is_unique[vendor_guest_list.mobile]|xss_clean|trim');
			$this->form_validation->set_rules('email', 'Email', 'valid_email|valid_emails|xss_clean|trim');
			$this->form_validation->set_rules('disclaimer', 'Disclaimer', 'callback_disclaimer_check');

			if($this->form_validation->run() == FALSE){
				$this->loadRegistrationView();
			}
			else{
				$recaptcha=$_POST['g-recaptcha-response'];
				//if(!empty($recaptcha)){
					include("getCurlData.php");
					$google_url="https://www.google.com/recaptcha/api/siteverify";
					//$secret='6LePqwkTAAAAANm2erQf3znN96t3KC9fkfhcBgx7';
					$secret='6Lf6rwkTAAAAAM5J8GJ_dxuHOl8LPLHvNmiRQpTZ';
					$ip=$_SERVER['REMOTE_ADDR'];
					$url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
					$res=getCurlData($url);
					$res= json_decode($res, true);
					//reCaptcha success check 
					if($res['success']){
						$registeredId = $this->MRegister->register();
						if($registeredId == 0){
							$this->loadRegistrationView('Registration error, please try again');
						}
						else{
							$this->load->helper('sms_helper');
							send_sms_registration($_POST['mobileNumber'], $registeredId);
							redirect('/successRegistration/index/'.$registeredId);
						}
					}
					else{
						$this->loadRegistrationView('Registration error, You must check Captcha');
					}
				//}
			}
		}
		catch(Exception $e){
			$this->loadRegistrationView($e->getMessage());
		}
	}

	function disclaimer_check(){
		if(isset($_POST['disclaimer'])){
			return true;
		}
		else{
			$this->form_validation->set_message('disclaimer_check', 'You have to certify you are physically fit.');
			return false;
		}
	}
	function check_captcha($str){
	    $word = $this->session->userdata('captchaWord');
	    if(strcmp(strtoupper($str),strtoupper($word)) == 0){
	      return true;
	    }
	    else{
	      $this->form_validation->set_message('check_captcha', 'Please enter correct words!');
	      return false;
	    }
  	}
}
?>