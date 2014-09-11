<?php

class IL_Controller extends CI_Controller {
	
	public function __construct() {	
		
		parent::__construct();
		
		$this->is_authenticated();
			
	}
	
	/**
	 * Check if the current user is logged in
	 */
	public function is_authenticated() {
		
		if($this->session->userdata('is_authenticated') === FALSE) {
			redirect('user', 'login');
		}
	}
	
}