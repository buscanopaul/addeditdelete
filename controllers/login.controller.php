<?php 

session_start();

require_once("function/function.php");

	//$users=array(array("username"=>"admin","password"=>"admin","firstName"=>"paul","lastName"=>"buscano"),
	//			array("username"=>"bbb","password"=>"quezon","firstName"=>"lorenz","lastName"=>"waw"),
	//			array("username"=>"ccc","password"=>"wew","firstName"=>"anaya","lastName"=>"ui"));

	$users = getUser();


if(!empty($_SESSION['name']))
	{

		header("location: home.php");

	}




	if(isset($_POST['submit']))
	{

		$lower = $_POST['username'];
		$lower = strtolower($lower);

		$minmax = $_POST['username'];
		$minmax = strlen($minmax);

	

		if(!empty($lower) && !empty($_POST['password']))
		{


			if(ctype_alpha($_POST['username']))
			{
			//$post = $_POST;

			foreach ($users as $x) 
			{

					if($x['username'] == $lower  && $x['password'] == $_POST['password'])
				{

					$var_firstname= $x["firstName"];
					$var_lastname= $x["lastName"];


				}
				
				
			}	

			

				if(!empty($var_firstname) && !empty($var_lastname))
				{

					$name = $var_lastname . " " . $var_firstname;

					$_SESSION['name'] = $name;

					header("location: home.php");

				}
				else
				{
					$username= $_POST['username'];

					$msg = "Please enter your correct username and password";

				}

					
			}

			else
			{

				$special = "Please no special character!";
			}


				
		}
		else
		{

			$msg = "Please enter your username and password";

		}

	}







