<?php 

abstract class UC_Base_DAO {
	private $_connection;

	public function __construct() {
		global $connection_string, $username, $password;
		$this->_connect_to_db($connection_string, $username, $password);
	}

	private function _connect_to_db($connection_string, $user, $password) {
		try {
			$this->_connection = new \PDO($connection_string, $user, $password);
		} catch (\PDOException $e) {
			die("Connection error: " . $e->getMessage() . "<br>");
		}
	}

	private function fetch($value, $key = NULL) {
		if(is_null($key)) {
			$key = $this->_primary_key;
		}

		try {
			$sql = "select * from {$this->_table_name} where {$key}='{$value}'";

			$queryHandler = $this->_connection->prepare($sql);
			$queryHandler->execute();

			return $queryHandler->fetch(\PDO::FETCH_ASSOC);
		} catch (\PDOException $e) {
			die("Fetch error: " . $e->getMessage() . "<br>");
		}
	}

	private function update($keyedArray) {
		$sql = "update {$this->_table_name} set ";

		$updates = array();
		foreach($keyedArray as $column=>$value) {
			$updates[] = "{$column}='{$value}'";
		}

		try {
			$sql .= implode(',', $updates);
			$sql .= "where {$this->_primary_key}='{$keyedArray[$this->_primaryKey]}'";

			$queryHandler = $this->_connection->prepare($sql);
			$queryHandler->execute();

			return ($queryHandler->rowCount()) ? true : false;
		} catch (\PDOException $e) {
			die("Update error: " . $e->getMessage() . "<br>");
		}
	}

	private function insert($keyedArray) {
		$sql = "insert into {$this->_table_name} (";

		$columns = $values = array();
		foreach($keyedArray as $column=>$value) {
			$columns[] = $column;
			$values[] = $value;
		}

		try {
			$sql .= implode(',', $columns).")";
			$sql .= "values (".implode(',', $columns).")";

			$queryHandler = $this->_connection->prepare($sql);
			$queryHandler->execute();

			return ($queryHandler->lastInsertId()) ? $queryHandler->lastInsertId() : false;
		} catch (\PDOException $e) {
			die("Update error: " . $e->getMessage() . "<br>");
		}
	}

	private function delete($value) {

		try {
			$sql = "delete from {$this->_table_name} where {$this->_primary_key}='{$value}'";

			$queryHandler = $this->_connection->prepare($sql);
			$queryHandler->execute();

			return ($queryHandler->rowCount()) ? true : false;
		} catch (\PDOException $e) {
			die("Fetch error: " . $e->getMessage() . "<br>");
		}
	}
}