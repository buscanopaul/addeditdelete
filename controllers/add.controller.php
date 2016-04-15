<?php

require_once("functions/function.php");

$users = getUser();

if(isset($_POST['submit']))
	{

			

		insertUser($_POST);
		header("Location: home.php");
		


	}