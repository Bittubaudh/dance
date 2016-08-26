<?php

class UC_Family {
	protected $id;
	protected $pretty_name;
	protected $register_timestamp;
	protected $register_user_id;
	
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

}