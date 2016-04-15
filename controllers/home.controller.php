<?php



require_once('functions/function.php');


	if(isset($_POST['update']))
	{

		
		updateUser($_POST);

	}

	if(isset($_POST['delete']))
	{

		
		deleteUser($_POST);

	}

$users = getUser();
