<?php
	include_once 'Connection.php';

	class UserConnection implements Connection {
		// public static $SUCCESS = "SUCCESSFUL";
		// public static $ERROR = "ERROR";
		// public $STATE;
		var $conn;

		public function UserConnection() {
			
		}

		public function get($sql) {
			$servername = "localhost";
			$username = "root";
			$password = "vagrant";
			$db = "manila";

			// Create connection
			$this->conn = new mysqli($servername, $username, $password, $db);
			// Check connection
			if ($this->conn->connect_error) {
				throw new Exception("Connection failed: " . $this->conn->connect_error);
				die();
			}
			
			$result = $this->conn->query("SELECT * FROM user;");
			
			if($result->num_rows==0)
				throw new Exception("No rows returned.");

			return $result;
		}

		public function post($sql) {
			$servername = "localhost";
			$username = "root";
			$password = "vagrant";
			$db = "manila";

			// Create connection
			$this->conn = new mysqli($servername, $username, $password, $db);
			// Check connection
			if ($this->conn->connect_error) {
				// $this->STATE = self::ERROR;
				throw new Exception("Connection failed: " . $this->conn->connect_error);
				die();
			}

			$result = $this->conn->query($sql);
			if ($result !== TRUE) {
				echo "An error has occured.";
	   			throw new Exception("Error: " . $sql . "<br>" . $this->conn->error);
	   			die();
			}

			return $result;
		}

		public function close() {
			$this->conn->close();
		}
	}
?>