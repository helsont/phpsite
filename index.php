<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<?php 
			include_once 'libs/View.php';
			echo View::php('style');
		?>
	</head>
	<body>
		<?php 
			echo View::php('header');

			require_once 'libs/StatusPostConnection.php';
			require_once 'libs/NewsPost.php';
			require_once 'libs/PostDisplayer.php';

			$status = new StatusPostConnection();
			$posts = $status->get('*',NULL);

			$postDisplay = new PostDisplayer($posts);
			$postDisplay->render();
			// echo View::render('footer');
		?>
	</body>
</html>