<?php 

include('include/db.php');
session_start();


if(isset($_POST['login_btn'])){

	
	$user = $_POST['user'];
	$password = $_POST['password'];  
	//$errors   = array(); 


	$sql="SELECT *,count(*) FROM `users` WHERE `email`='$user' AND `password`='$password' AND  `is_active`=1";
	$result=$db -> query($sql);
	$row=$result->fetch(PDO::FETCH_ASSOC);

	if($row['count(*)']>0)
	{		
		$_SESSION['role'] = 'user';
		$_SESSION['blogin'] = TRUE;
		$_SESSION['mail']=$user;
		
	
		header('Location: /profile');
		exit();
	}
	else
	{
		header('Location: /User');
		exit();
	}


}
else
{
	header('Location: /User');
	exit();
}



















?>