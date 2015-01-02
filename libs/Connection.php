<?php
	interface Connection {
		public function get($select,$where);
		public function post($sql);
		public function close();
	}
?>