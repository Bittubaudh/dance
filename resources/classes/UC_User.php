<?php

class UC_User_DAO extends UC_Base_DAO {
	protected $_table_name = 'userTable';
	protected $_primary_key = 'id';

	public function get_user_by_id($id) {
		$row = $this->fetch($id, 'id');

		if ($row) {
			return $this->convert_row_to_user($row);
		}
		return false;
	}

	public function update_user($uc_user) {
		$row = $this->convert_user_to_row($uc_user);
		$this->update($row);
	}

	private function convert_row_to_user($row) {
		$uc_user = new UC_User;

		$uc_user->set_id ($row['id']);
		$uc_user->set_user_name ($row['user_name']);
		$uc_user->set_user_pass ($row['user_pass']);
		$uc_user->set_register_timestamp ($row['register_timestamp']);
		$uc_user->set_role ($row['role']);
		$uc_user->set_first_name ($row['first_name']);
		$uc_user->set_last_name ($row['last_name']);
		$uc_user->set_email ($row['email']);
		$uc_user->set_birthday ($row['birthday']);
		$uc_user->set_street_address ($row['street_address']);
		$uc_user->set_street_address_2 ($row['street_address_2']);
		$uc_user->set_locality ($row['locality']);
		$uc_user->set_administrative_area_level_1 ($row['administrative_area_level_1']);
		$uc_user->set_postal_code ($row['postal_code']);
		$uc_user->set_country ($row['country']);

		return $uc_user;
	}

	private function convert_user_to_row(UC_User $uc_user) {
		$row = array();

		$row['id'] = $uc_user->get_id();
		$row['user_name'] = $uc_user->get_user_name();
		$row['user_pass'] = $uc_user->get_user_pass();
		$row['register_timestamp'] = $uc_user->get_register_timestamp();
		$row['role'] = $uc_user->get_role();
		$row['first_name'] = $uc_user->get_first_name();
		$row['last_name'] = $uc_user->get_last_name();
		$row['email'] = $uc_user->get_email();
		$row['birthday'] = $uc_user->get_birthday();
		$row['street_address'] = $uc_user->get_street_address();
		$row['street_address_2'] = $uc_user->get_street_address_2();
		$row['locality'] = $uc_user->get_locality();
		$row['administrative_area_level_1'] = $uc_user->get_administrative_area_level_1();
		$row['postal_code'] = $uc_user->get_postal_code();
		$row['country'] = $uc_user->set_country();

		return $row;
	}
}

class UC_User {
	protected $id;
	protected $user_name;
	protected $user_pass;
	protected $register_timestamp;
	protected $role;
	protected $first_name;
	protected $last_name;
	protected $email;
	protected $birthday;
	protected $street_address;
	protected $street_address_2;
	protected $locality;
	protected $administrative_area_level_1;
	protected $postal_code;
	protected $country;
	
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
	public function get_birthday () {
		return $this->birthday;
	}
	public function set_birthday ($birthday) {
		$this->birthday = $birthday;
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