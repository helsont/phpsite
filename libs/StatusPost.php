<?php
	
	include_once 'Post.php';

	class StatusPost implements Post {
		
		var $user;
		var $title;
		var $text;
		var $date;

		var $subPosts;

		function StatusPost($user, $title, $text, $date){ 
			$this->user = $user;
			$this->title = $title;
			$this->text = $text;
			$this->date = $date;
		}

		public function getTitle() {
			return $this->title;
		}
		public function getText() {
			return $this->text;
		}

		public function getUser() {
			return $this->user;
		}

		public function getDate() {
			return $this->date;
		}

		public function getSubPosts() {
			return $this->subPosts;
		}

		public function toString() {
			return 'Title: ' .$this->title . ' Text: ' . $this->text . ' User: ' . $this->user . ' Date: '.$this->date;
		}
	}
?>