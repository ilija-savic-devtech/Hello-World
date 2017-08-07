<?php
	require "init/init.php";
	

	echo "Hello World!!!<br>";

	$logic = new \routes\RouteLogic();
	$route = new routes\Route($logic);
	$home = new \classes\Home();
	$about = new \classes\About();
	$contact = new \classes\Contact();

	$home->setGreetMessage("Welcome to our company");
	$about->setCompanyName("Megalomania Co");
	$about->setDescription("Best company in the world!!!");
	$contact->setPhone("021/555-333");
	$contact->setAdress("Dusanovog Carstva 69");

	$route->add('/', $home);
	$route->add('/about', $about);
	$route->add('/contact', $contact);

	
	$route->submit();
?>