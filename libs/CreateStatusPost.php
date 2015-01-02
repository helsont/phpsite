<?php
	require_once 'StatusPost.php';
	require_once 'StatusPostConnection.php';
	$post = new CreateStatusPost();

	class CreateStatusPost {

		function CreateStatusPost() {
			if($_SERVER["REQUEST_METHOD"] != "POST") {
				throw new Exception("Error: Attempting to create status post while REQUEST_METHOD is not POST.");
			}

			// Errors for the user to see.
			$errors = "";

			// Will instantiate a new StatusPost object.
			$title  = "";
			$body 	= "";

			// Retrive first name value
			if (empty($this->getPost("title"))) {
				$errors .= "No title given.<br>";
			} else {
				$title = $this->getPost("title");
			}

			if(empty($this->getPost("body"))) {
				$errors .= "Type something in the body of your post. ";
			}  else {
				$body = $this->getPost("body");
			}

			if($errors!="") {
				echo $errors;
				throw new Exception($errors);
			} else 
				$this->addToDatabase($title,$body);
				
		}
		
		function addToDatabase($title,$body) {
			$connection = new StatusPostConnection();
			$values = array($title,$body);
			$sqlValues = $this->convertValues($values);
			$result = $connection->post($sqlValues);
			header('Location: ../index.php');
			exit;
		}

		function convertValues($values) {
			$result = '"';
			for($i = 0; $i<count($values) - 1;$i++) {
				$result .= $values[$i] . '", "';
			}
			$result .= $values[count($values)-1] . '"'; 
			return $result;
		}

		function getPost($str) {
			return $_POST[$str];
		}
	}
?>