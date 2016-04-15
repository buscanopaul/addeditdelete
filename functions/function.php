<?php 

require_once('includes/connection.php');


function getUser()
{

	$query =  "SELECT * FROM tbl_customer ";

	$result = mysql_query($query);


	while($fetchAssoc = mysql_fetch_assoc($result))
	{

		$info[] = $fetchAssoc;

	}

	if(empty($info))
	{

		return null;

	}

	return $info;





}

function updateUser($post)

{



	$query = "UPDATE tbl_customer SET  firstname = '{$post['firstname']}', lastname = '{$post['lastname']}' , age = '{$post['age']}' WHERE id='{$post['id']}' "; 

	//echo $query;
	//break;

	$result	= mysql_query($query);

	if($result == false)
	{

		return null;
	}
	return true;
}

function deleteUser($post)

{



	$query = "DELETE FROM tbl_customer WHERE id='{$post['id']}' "; 

	//echo $query;
	//break;

	$result	= mysql_query($query);

	if($result == false)
	{

		return null;
	}
	return true;
}

function insertUser($post)
{

	$post['firstname'];
	

	$post['lastname'];
	

	$post['age'];
	

	$query = "INSERT INTO tbl_customer (firstname, lastname, age) 
	VALUES('{$post['firstname']}','{$post['lastname']}', '{$post['age']}')";

	//echo $query;
	//break;

	$result	= mysql_query($query);

	if($result == false)
	{

		return null;
	}
	return true;
}
