<?php
	class View {

		public static function render($src) {
			$dir = '/vagrant/tutorial/factory/';
			// error_log($dir . "design/" . $src . ".php");
			return file_get_contents($dir . "design/" . $src . ".php");
		}

		public static function php($src) {
			$dir = '/vagrant/tutorial/factory/';
			include_once $dir . "design/" . $src . ".php";
		}

		public static function phpLibs($src) {
			$dir = '/vagrant/tutorial/factory/';
			include_once $dir . "libs/" . $src . ".php";
		}
		
		public static function css($src) {
			$dir = '/vagrant/tutorial/factory/';
			// error_log($dir . "design/" . $src . ".php");
			return file_get_contents($dir . "design/" . $src . ".css");
		}
		
		public static function getParentFolder($name){
			$dir = '/vagrant/tutorial/factory/';
			$paths = array ( '/design/', '/images/', '/libs/','/pages/');  
			foreach ($path as $paths){  
				if (file_exists($webroot . $path . $src)){  
					return $path;
				}  
			}  
		}

		public static function getExtension($src) {
			$ext = pathinfo($src, PATHINFO_EXTENSION);
			return $ext;
		}
		public static function getHTMLFullPath($src){
			$dir = '/vagrant/tutorial/factory/';
			$htmlDir = "http://127.0.0.1:4567/tutorial/factory/";
			$paths = array ( 'design/', 'images/', 'libs/','pages/');  

			for ($i = 0; $i < count($paths); ++$i) {
				if (file_exists($dir . $paths[$i] . $src)){
					$val = $htmlDir.$paths[$i] . $src;
					return($val);
				}
			}
		}
		public static function image($src) {
			return "../images/" . $src;
		}
	}
?>