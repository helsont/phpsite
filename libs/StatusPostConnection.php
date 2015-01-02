<?php
	
	require_once 'AbstractConnection.php';
	require_once 'StatusPost.php';
	class StatusPostConnection extends AbstractConnection {

		public function StatusPostConnection() {
			$servername = "localhost";
			$username = "root";
			$password = "vagrant";
			$db = "manila";
			$tableName = "content";
			parent::__construct($servername, $username, $password, $db, $tableName);
		}

		public function get($select, $where) {
			$conn = parent::connect();
			$params = 'title, body';
			$sql = 'SELECT ' . $select . ' FROM '. $this->tableName;
			if($where!=NULL && !empty($where)) {
				$sql.=' WHERE ('.$where.')';
			}
			error_log($sql);
			$result = $this->conn->query($sql);
			$stack = array();
			if ($result->num_rows > 0) {
			    // output data from each row
			    while($row = $result->fetch_assoc()) {
			    	$user = "empty";
			    	$title = $row["title"];
			    	$text = $row["body"];
			    	$date = $row["date"];
			    	$post = new StatusPost($user, $title, $text, $date);
					array_push($stack, $post);
			    }
			    
			} else {
			    echo "0 results";
			}
			return $stack;
		}

		public function post($values){
			$conn = parent::connect();
			$params = 'title, body';
			$sql = 'INSERT INTO ' . $this->tableName .' (' . $params . ') VALUES ('. $values .')';

			$result = $this->conn->query($sql);
			if ($result !== TRUE) {
				echo 'An error has occured';
				// error_log("Error: " . $sql . $this->conn->error);
	   			throw new Exception("Error: " . $sql . $this->conn->error);
	   			die();
			}
			return $result;
		}

		public function close() {
			$this->conn->close();
		}
	}
?>