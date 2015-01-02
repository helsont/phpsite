<?php
	if($_SERVER["REQUEST_METHOD"] != "GET") {
		throw new Exception("Error: Attempting to create status post while REQUEST_METHOD is not POST.");
	}

	function getGet($str) {
		return $_GET[$str];
	}
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<?php 
			include_once '/vagrant/tutorial/factory/libs/View.php';
			echo View::php('style'); ?>
	</head>
	<body>
		<?php echo View::php('header');
			View::phpLibs('StatusPostConnection');
			View::phpLibs('NewsPost');
			View::phpLibs('PostDisplayer');

			$status = new StatusPostConnection();
			error_log('Search:'.getGet('search'));
			$posts = $status->get('title, body, date', 'body LIKE \'%'.getGet('search').'%\' || title LIKE \'%'.getGet('search').'%\'');
			
			$postDisplay = new PostDisplayer($posts);
			$postDisplay->render();
		?>
		<div>
			<center>
				<?php echo View::php('footer');?>
			</center>
		</div>
	</body>
</html>