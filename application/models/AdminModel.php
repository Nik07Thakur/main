<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	private $database = 'insurance';
	private $collection = 'users';
	private $conn;
	public function __construct(){
		parent::__construct();
		$this->load->library('mongoci');
		$this->conn = $this->mongoci->getConn();
	}

	public function insert($data) {
		try {
			
			
			$query = new MongoDB\Driver\BulkWrite();
			$query->insert($data);
			
			$result = $this->conn->executeBulkWrite($this->database.'.'.$this->collection, $query);
			
			if($result) {
				return TRUE;
			}
			
			return FALSE;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while saving users: ' . $ex->getMessage(), 500);
		}
	}

	public function update($_id, $name, $phone) {

		try {
			
			$query = new MongoDB\Driver\BulkWrite();
			
			$query->update(['_id' => new \MongoDB\BSON\ObjectId($_id)], ['$set' => array('name' => $name, 'phone' => $phone)]);
			
			$result = $this->conn->executeBulkWrite($this->database.'.'.$this->collection, $query);
			 
			if($result) {
				return TRUE;
			}
			
			return FALSE;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while saving users: ' . $ex->getMessage(), 500);
		}
	}

	public function delete_customer($_id) {

		try {
				
			$query = new MongoDB\Driver\BulkWrite();
			
			$query->delete(['_id' => new MongoDB\BSON\ObjectId($_id)]);
			
			$result = $this->conn->executeBulkWrite($this->database.'.'.$this->collection, $query);
			 
			if($result) {
				return TRUE;
			}
			
			return FALSE;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while deleting users: ' . $ex->getMessage(), 500);
		}
	}

	public function delete_agent($_id) {
		// echo $_id;die;
		try {
				
			$query = new MongoDB\Driver\BulkWrite();
			
			$query->delete(['_id' => new MongoDB\BSON\ObjectId($_id)]);
			
			$result = $this->conn->executeBulkWrite($this->database.'.'.$this->collection, $query);
			 
			if($result) {
				return TRUE;
			}
			
			return FALSE;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while deleting users: ' . $ex->getMessage(), 500);
		}
	}

	public function getAllCustomers() {
		try {
			$filter = ['role' => 'customer'];
			$options = ['sort' => ['createdAt' => -1]];
			$query = new MongoDB\Driver\Query($filter, $options);
			$rows   = $this->conn->executeQuery($this->database.'.'.$this->collection, $query);
			$results = [];
			foreach ($rows as $document) {
			  $results[] = $document;
			}
			
			return $results;
		
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			//show_error('Error while saving users: ' . $ex->getMessage(), 500);
		}
	}
	public function getAllAgents() {
		try {
			$filter = ['role' => 'agent'];
			$options = ['sort' => ['createdAt' => -1]];
			$query = new MongoDB\Driver\Query($filter, $options);
			$rows   = $this->conn->executeQuery($this->database.'.'.$this->collection, $query);
			$results = [];
			foreach ($rows as $document) {
			  $results[] = $document;
			}
			return $results;
		} catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while getting users: ' . $ex->getMessage(), 500);
		}
	}
	public function getAdmin($email = null, $password = null, $role = "admin")
	{
		try {
			$filter = ["role" => $role, "email" => $email, "password" => $password ];
			$options = [];
			$query = new MongoDB\Driver\Query($filter, $options);
			$rows   = $this->conn->executeQuery($this->database.'.'.$this->collection, $query);
			
			$results = [];
			foreach ($rows as $document) {
				$results[] = $document;
			}
			return $results;
		}
		catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while getting users: ' . $ex->getMessage(), 500);
		}
	}

	public function getUser($email = null, $role = "admin")
	{
		try {
			$filter = ["role" => $role, "email" => $email ];
			$options = [];
			$query = new MongoDB\Driver\Query($filter, $options);
			$rows   = $this->conn->executeQuery($this->database.'.'.$this->collection, $query);
			
			$results = [];
			foreach ($rows as $document) {
				$results[] = $document;
			}
			return $results;
		}
		catch(MongoDB\Driver\Exception\RuntimeException $ex) {
			show_error('Error while getting users: ' . $ex->getMessage(), 500);
		}
	}

}

?>