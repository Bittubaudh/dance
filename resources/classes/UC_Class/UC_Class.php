<?php

class UC_Class {
	private $id;
	private $pretty_name;
	private $register_timestamp;
	private $register_user_id;
	private $classroom_id;
	private $status;
	private $description;
	private $gender;
	private $min_age;
	private $max_age;
	private $skills_required;
	private $spaces;
	
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
	public function get_classroom () {
		return $this->classroom;
	}
	public function set_classroom ($classroom) {
		$this->classroom = $classroom;
	}
	public function get_status () {
		return $this->status;
	}
	public function set_status ($status) {
		$this->status = $status;
	}
	public function get_description () {
		return $this->description;
	}
	public function set_description ($description) {
		$this->description = $description;
	}
	public function get_gender () {
		return $this->gender;
	}
	public function set_gender ($gender) {
		$this->gender = $gender;
	}
	public function get_min_age () {
		return $this->min_age;
	}
	public function set_min_age ($min_age) {
		$this->min_age = $min_age;
	}
	public function get_max_age () {
		return $this->max_age;
	}
	public function set_max_age ($max_age) {
		$this->max_age = $max_age;
	}
	public function get_skills_required () {
		return $this->skills_required;
	}
	public function set_skills_required ($skills_required) {
		$this->skills_required = $skills_required;
	}
	public function get_spaces () {
		return $this->spaces;
	}
	public function set_spaces ($spaces) {
		$this->spaces = $spaces;
	}

}