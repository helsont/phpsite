<?php
	require_once 'Connection.php';

	abstract class AbstractConnection implements Connection {

		protected $conn;
		protected $servername;
		protected $username;
		protected $password;
		protected $db;
		protected $tableName;

		public function AbstractConnection($servername, $username, $password, $db, $tableName) {
			$this->servername	=$servername;
			$this->username 	=$username;
			$this->password 	=$password;
			$this->db 			=$db;
			$this->tableName 	=$tableName;
		}

		public function connect() {
			// Create connection
			// look into PDO its more secure
			$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
			// Check connection
			if ($this->conn->connect_error) {
				throw new Exception("Connection failed: " . $this->conn->connect_error);
			} else {
				return $this->conn;
			}
		}

		public function close() {
			$this->conn->close();
		}
	}
?>