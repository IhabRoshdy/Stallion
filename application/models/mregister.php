<?php
	/**
	* 
	*/
	class MRegister extends CI_Model
	{
		function register(){
			$data = array(
				'vendor_id'=>2,
				'name'=>$_POST['name'],
				'mobile'=>$_POST['mobileNumber'],
				'email'=>$_POST['email'],
				'update_time'=>time(),
				'create_time'=>time(),
				'guest_local_id'=>0,
				'type_id'=>1,
				'gender'=>$_POST['genders'],
				'age'=>$_POST['age'],
				'address'=>$_POST['address'],
				'athbg'=>$_POST['athBg']);

			$this->db->insert('vendor_guest_list', $data);

			$registeredId = $this->db->insert_id();

			$data = array(
				'event_id'=>1,
				'activity_id'=>1,
				'vendor_id'=>2,
				'status'=>2,
				'create_time'=>time(),
				'update_time'=>time(),
				'name'=>$_POST['name'],
				'mobile'=>$_POST['mobileNumber'],
				'gender'=>$_POST['genders'],
				'note'=>'');

			$this->db->insert('reservations', $data);

			$redervationId = $this->db->insert_id();

			$data = array(
				'reservation_id'=>$redervationId,
				'grade_id'=>1,
				'create_time'=>time(),
				'update_time'=>time());

			$this->db->insert('reservationsDetails_event', $data);

			return $registeredId;
		}
	}
?>