<?php
	require "init/init.php";
	

	echo "Hello World!!<br>";

	$test = new classes\Test();
	$test->myFunction();

	$route = new routes\Route();

	$route->add('/', new classes\Home());
	$route->add('/about', new classes\About());
	$route->add('/contact', new classes\Contact());

	echo "<pre>";
	print_r($route);
	echo "</pre>";

	$route->submit();
?>