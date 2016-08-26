<?php

class UC_User_DAO extends UC_Base_DAO {
	protected $_table_name = 'userTable';
	protected $_primary_key = 'id';

	public function get_user_by_id($id) {
		$row = $this->fetch($id, 'id');

		if ($row) {
			return UC_User_Factory::create($row);
		}
		return false;
	}

	public function update_user(UC_User $uc_user) {
		$row = UC_User_Factory::decompose($uc_user);
		$this->update($row);
	}
}

class UC_User_Repository {

	
}

class UC_User_Factory {
	private static $_instance;

	public static function set_factory(UC_User_Factory $f) {
		self::$_instance = $f;
	}

	public static function get_factory() {
		if(!self::$_instance)
			self::$_instance = new self;

		return self::$_instance;
	}

	public static function create(array $user_data) {
		$uc_user = new UC_User;

		$uc_user->set_id ($user_data['id']);
		$uc_user->set_user_name ($user_data['user_name']);
		$uc_user->set_user_pass ($user_data['user_pass']);
		$uc_user->set_register_timestamp ($user_data['register_timestamp']);
		$uc_user->set_role ($user_data['role']);
		$uc_user->set_first_name ($user_data['first_name']);
		$uc_user->set_last_name ($user_data['last_name']);
		$uc_user->set_email ($user_data['email']);
		$uc_user->set_birthday ($user_data['birthday']);
		$uc_user->set_street_address ($user_data['street_address']);
		$uc_user->set_street_address_2 ($user_data['street_address_2']);
		$uc_user->set_locality ($user_data['locality']);
		$uc_user->set_administrative_area_level_1 ($user_data['administrative_area_level_1']);
		$uc_user->set_postal_code ($user_data['postal_code']);
		$uc_user->set_country ($user_data['country']);

		return $uc_user;
	}

	public static function decompose(UC_User $uc_user) {

		$user_data = array();

		$user_data['id'] = $uc_user->get_id();
		$user_data['user_name'] = $uc_user->get_user_name();
		$user_data['user_pass'] = $uc_user->get_user_pass();
		$user_data['register_timestamp'] = $uc_user->get_register_timestamp();
		$user_data['role'] = $uc_user->get_role();
		$user_data['first_name'] = $uc_user->get_first_name();
		$user_data['last_name'] = $uc_user->get_last_name();
		$user_data['email'] = $uc_user->get_email();
		$user_data['birthday'] = $uc_user->get_birthday();
		$user_data['street_address'] = $uc_user->get_street_address();
		$user_data['street_address_2'] = $uc_user->get_street_address_2();
		$user_data['locality'] = $uc_user->get_locality();
		$user_data['administrative_area_level_1'] = $uc_user->get_administrative_area_level_1();
		$user_data['postal_code'] = $uc_user->get_postal_code();
		$user_data['country'] = $uc_user->set_country();

		return $user_data;
	}
}

class UC_User {
	private $id;
	private $user_name;
	private $user_pass;
	private $register_timestamp;
	private $role;
	private $first_name;
	private $last_name;
	private $email;
	private $street_address;
	private $street_address_2;
	private $locality;
	private $administrative_area_level_1;
	private $postal_code;
	private $country;
	private $birthday;

	public function get_id () {
		return $this->id;
	}
	public function set_id ($id) {
		$this->id = $id;
	}
	public function get_user_name () {
		return $this->user_name;
	}
	public function set_user_name ($user_name) {
		$this->user_name = $user_name;
	}
	public function get_user_pass () {
		return $this->user_pass;
	}
	public function set_user_pass ($user_pass) {
		$this->user_pass = $user_pass;
	}
	public function get_register_timestamp () {
		return $this->register_timestamp;
	}
	public function set_register_timestamp ($register_timestamp) {
		$this->register_timestamp = $register_timestamp;
	}
	public function get_role () {
		return $this->role;
	}
	public function set_role ($role) {
		$this->role = $role;
	}
	public function get_first_name () {
		return $this->first_name;
	}
	public function set_first_name ($first_name) {
		$this->first_name = $first_name;
	}
	public function get_last_name () {
		return $this->last_name;
	}
	public function set_last_name ($last_name) {
		$this->last_name = $last_name;
	}
	public function get_email () {
		return $this->email;
	}
	public function set_email ($email) {
		$this->email = $email;
	}
	public function get_street_address () {
		return $this->street_address;
	}
	public function set_street_address ($street_address) {
		$this->street_address = $street_address;
	}
	public function get_street_address_2 () {
		return $this->street_address_2;
	}
	public function set_street_address_2 ($street_address_2) {
		$this->street_address_2 = $street_address_2;
	}
	public function get_locality () {
		return $this->locality;
	}
	public function set_locality ($locality) {
		$this->locality = $locality;
	}
	public function get_administrative_area_level_1 () {
		return $this->administrative_area_level_1;
	}
	public function set_administrative_area_level_1 ($administrative_area_level_1) {
		$this->administrative_area_level_1 = $administrative_area_level_1;
	}
	public function get_postal_code () {
		return $this->postal_code;
	}
	public function set_postal_code ($postal_code) {
		$this->postal_code = $postal_code;
	}
	public function get_country () {
		return $this->country;
	}
	public function set_country ($country) {
		$this->country = $country;
	}

}