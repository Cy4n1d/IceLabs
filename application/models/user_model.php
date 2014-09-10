<?php

class User_model extends CI_Model {
	/**
	 * Id of the User
	 * @var int
	 */
	private $id;
	/**
	 * Username
	 * 
	 * @var string
	 */
	private $user_name;
	/**
	 * Email of the User
	 * @var string
	 */
	private $email;
	/**
	 * The key to the castle
	 * @var string
	 */
	private $password;
	/**
	 * Point of time when the user registered
	 * @var DateTime
	 */
	private $registered_at;
	/**
	 * Point of time when the user logged in the last time
	 * @var DateTime
	 */
	private $last_login_at;
	/**
	 * Is the User activated?
	 * @var boolean
	 */
	private $activated;
	
	
	
	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * 
	 * @param int $id
	 * @return User_model
	 */
	public function setId($id) {
		$this->id = $id;
		
		return self;
	}
	
	/**
	 * @return string $username
	 */
	public function getUserName() {
		return $this->user_name;
	}
	
	/**
	 * 
	 * @param string $user_name
	 * @return User_model
	 */
	public function setUserName($user_name) {
		$this->user_name = $user_name;
		
		return self;
	}
	
	/**
	 * @return string 
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * 
	 * @param string $email
	 * @return User_model
	 */
	public function setEmail($email) {
		$this->email = $email;
		
		return self;
	}
	
	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * 
	 * @param string $password
	 * @return User_model
	 */
	public function setPassword($password) {
		$this->password = $password;
		
		return self;
	}
	
	/**
	 * @return DateTime
	 */
	public function getRegisteredAt() {
		return $this->registered_at;
	}
	
	/**
	 * 
	 * @param DateTime $registered_at
	 * @return User_model
	 */
	public function setRegisteredAt(DateTime $registered_at) {
		$this->registered_at = $registered_at;
		
		return self;
	}
	
	/**
	 * @return DateTime
	 */
	public function getLastLoginAt() {
		return $this->last_login_at;
	}
	
	/**
	 * 
	 * @param DateTime $last_login_at
	 * @return User_model
	 */
	public function setLastLoginAt(DateTime $last_login_at) {
		$this->last_login_at = $last_login_at;
		
		return self;
	}
	
	/**
	 * @return boolean
	 */
	public function getActivated() {
		return $this->activated;
	}
	
	/**
	 * 
	 * @param boolean $activated
	 * @return User_model
	 */
	public function setActivated($activated = FALSE) {
		$this->activated = $activated;
		
		return self;
	}
	
	
	
	
}

