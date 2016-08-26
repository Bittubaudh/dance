<?php

class UC_Event {
	private $id;
	private $pretty_name;
	private $register_timestamp;
	private $register_user_id;
	private $description;
	private $event_start;
	private $event_end;
	private $spaces;
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
	public function get_description () {
		return $this->description;
	}
	public function set_description ($description) {
		$this->description = $description;
	}
	public function get_event_start () {
		return $this->event_start;
	}
	public function set_event_start ($event_start) {
		$this->event_start = $event_start;
	}
	public function get_event_end () {
		return $this->event_end;
	}
	public function set_event_end ($event_end) {
		$this->event_end = $event_end;
	}
	public function get_spaces () {
		return $this->spaces;
	}
	public function set_spaces ($spaces) {
		$this->spaces = $spaces;
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