<?php

class UC_Classroom {
	private $id;
	private $pretty_name;
	private $register_timestamp;
	private $register_user_id;
	private $capacity;
	private $facility_id;
	private $street_address;
	private $street_address_2;
	private $locality;
	private $administrative_area_level_1;
	private $postal_code;
	private $country;
	
	public function get_id () {
		return $this->id;
	}
	public function set_id ($id) {
		$this->id = $id;
	}
	public function get_pretty_name () {
		return $this->pretty_name;
	}
	public function set_pretty_name ($pretty_name) {
		$this->pretty_name = $pretty_name;
	}
	public function get_register_timestamp () {
		return $this->register_timestamp;
	}
	public function set_register_timestamp ($register_timestamp) {
		$this->register_timestamp = $register_timestamp;
	}
	public function get_register_user_id () {
		return $this->register_user_id;
	}
	public function set_register_user_id ($register_user_id) {
		$this->register_user_id = $register_user_id;
	}
	public function get_capacity () {
		return $this->capacity;
	}
	public function set_capacity ($capacity) {
		$this->capacity = $capacity;
	}
	public function get_facility_id () {
		return $this->facility_id;
	}
	public function set_facility_id ($facility_id) {
		$this->facility_id = $facility_id;
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