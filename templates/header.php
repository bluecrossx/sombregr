<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $title;?> </title>
</head>
	<header>
		<nav>
			<ul>
			<li>Home</li>
			<li><a href="ask.php">Ask a question</a></li>
			</ul>	
		</nav>
		<?php
			$notifier = new notifications;
			$notifier->createNotificationBar();

	?>
	</header>
<body>
