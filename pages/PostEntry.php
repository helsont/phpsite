<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<?php 
			include_once '/vagrant/tutorial/factory/libs/View.php';
			echo View::php('style'); ?>
	</head>
	<body>
		<?php echo View::php('header');?>
		<?php echo View::php('post_view');?>
		<div>
			<center>
				<?php echo View::php('footer');?>
			</center>
		</div>
	</body>
</html>