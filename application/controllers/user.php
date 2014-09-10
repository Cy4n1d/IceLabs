<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users Controller
 * @author b4rb4ross4
 *
 */
class User extends CI_Controller {
	
	/**
	 * Give an Overview of the currently logged in User
	 */
    public function index() {
        $this->layout->render();
    }
    
    /**
     * Edit view
     */
    public function edit() {
    	$this->layout->render();
    }
    
    /**
     * Save Action
     */
    public function save() {

    }
    
    /**
     * List View Action
     */
    public function list_view() {
    	$this->layout->render();
    }
    
    /**
     * Login Action
     */
    public function login() {

    }
    
    /**
     * Logout Action
     */
    public function logout() {

    }
}