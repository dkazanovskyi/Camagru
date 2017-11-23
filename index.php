<?php

	session_start();
	require('config/setup.php');
	require('conf.php');

	require('Classes/Bootstrap.php');
	require('Classes/Controller.php');
	require('Classes/Model.php');

	require('controllers/home.php');
	require('controllers/posts.php');
	require('controllers/users.php');

	require('models/home.php');
	require('models/post.php');
	require('models/user.php');

	$bootstrap = new Bootstrap($_GET);
	$controller = $bootstrap->createController();
	if($controller){
		$controller->executeAction();
	}
?>