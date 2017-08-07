<?php
	require "init/init.php";
	

	echo "Hello World!!<br>";

	$route = new routes\Route();

	$route->add('/', new classes\Home());
	$route->add('/about', new classes\About());
	$route->add('/contact', new classes\Contact());

	
	$route->submit();
?>