<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends MY_Controller {

	/**
	 * Update Page
	 */
	public function update($id)
	{
	 	$this->check_user();
		$user = $this->get_currentuser();
		
		$id = (int) $id;
		$this->load->model('activity_Model');
		$activity = $this->activity_Model->get_by_id($id);
		if (!$activity) redirect(site_url('user'));
		
		if ($activity->owner == $user->id || $user->is(User_model::ROLE_ADMIN)) {
			
			if ($this->is_post()) {
				if ($this->save_activity())
					redirect(site_url('user/view/'.$activity->owner));
			}
			
			$this->set_data('activity',$activity);
			$this->load->view('activity/update',$this->get_data());
		} else {
			redirect(site_url('user/view/'.$activity->owner));
		}
	}
	
	/** 
	 * Delete function
	 */
	public function delete($id) {
		
	 	$this->check_user();
		$user = $this->get_currentuser();
		
		$id = (int) $id;
		$this->load->model('activity_Model');
		$activity = $this->activity_Model->get_by_id($id);
		if (!$activity) redirect(site_url('user'));
		
		$owner = $activity->owner;
		if ($owner == $user->id || $user->is(User_model::ROLE_ADMIN)) {
			$activity->delete();
		}

		redirect(site_url('user/view/'.$owner));
	}

	
}

/* End of file activity.php */
/* Location: ./application/controllers/activity.php */