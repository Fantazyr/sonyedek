<?php 
include('connection.php');
session_start();


if(isset($_POST['login_btn'])){

	
	$user = $_POST['user'];
	$password = $_POST['password'];  
	//$errors   = array(); 


	$sql="SELECT *,count(*) FROM `admin_tablo` WHERE `mail`='$user' AND `password`='$password' AND  `is_active`=1";
	$result=$db -> query($sql);
	$row=$result->fetch(PDO::FETCH_ASSOC);

	if($row['count(*)']>0){
		
		$_SESSION['role'] = "admin";
		$_SESSION['alogin']=TRUE;
		$_SESSION['mail']=$user;
		header('Location: /admin/index');
		exit();
		
	}
	else
	{
		header('Location: /admin/login');
		exit();
	}


}
else if (isset($_POST['btn'])){

	$name = $_POST['name'] ; 
	$surname = $_POST['surname'] ; 
	$email = $_POST['email'] ; 
	$password = $_POST['password'] ; 
	$job = $_POST['job'] ;
	$role = "user";
	if ($name != null && $surname != null && $email != null && $password != null ) {
		$sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`,`users_job`,`role`) VALUES('$name', '$surname', '$email', '$password','$job','$role')";
        $db -> query($sql);
		
		if ($name=="" && $surname=="" && $email=="" && $password=="" && $job=="")
		{
		echo "Lütfen Tüm Alanları Doldurun!";	
		}
	   else{
		echo "Başarılı Şekilde Kaydettiniz.";	
	   }						
	}
	header('location: /admin/register');
	exit();
}

// içerik oluşturma

else if (isset($_POST['kaydet'])){

	$title = $_POST['title'] ;
	$kategori = $_POST['kategori'];
	$content = $_POST['content'] ; 
	if ($title != null && $content != null && $kategori != null) {
		$sql = $db->prepare("INSERT INTO `contents` (`title`,`kategori`,`content`) VALUES('$title','$kategori','$content')");
        $sql->execute();
	    $cikti = $sql->fetch(PDO::FETCH_ASSOC);
	    
	}
	header('location: /admin/contentlist');
	exit();
}


// içerik düzenle/sil işlemleri
else if (isset($_POST['content-update'])){

		 $id = $_POST['id'] ; 
		 $title = $_POST['title'] ; 
		 $content = $_POST['content'] ;
		if ($title != null && $content != null) {
			echo $sql = "UPDATE `contents` SET `title`='$title' , `content`= '$content' WHERE `id`='$id'";
			$db -> query($sql);
		}
		header('location: /admin/contentlist');
		exit();
		}

else if (isset($_POST['content_sil'])){

	$id = $_POST['id'] ;
	if ($id != null  ) {
		$sql = "UPDATE `contents` SET `is_active`= 0 WHERE `id`='$id'";
		$db -> query($sql);
	} 
	header('location: /admin/contentlist');
	exit();
	
}
// kişileri düzenle/sil işlemleri
else if (isset($_POST['user_update'])){

	$id = $_POST['id']; 
	$name = $_POST['first_name'] ; 
	$surname = $_POST['last_name'] ;
	$email = $_POST['email'] ; 
	$password = $_POST['password'] ;
	$job = $_POST['users_job'] ;
    if ($name != null && $surname != null && $email != null && $password != null) {
	   $sql = $db->exec("UPDATE `users` SET `first_name` = '$name', `last_name` = '$surname', `email`= '$email', `password`= '$password',`users_job`= '$job' WHERE `id` = '$id'");
	   $db -> prepare($sql);
    }
	header('location: /admin/users_list');
	exit();
}

else if (isset($_POST['user_sil'])){

	$id = $_POST['id'] ;
	if ($id != null ) {
   		$sql = "UPDATE `users` SET `is_active`= 0 WHERE `id`='$id'";
   		$db -> query($sql);
	} 
	header('location: /admin/users_list');
	exit();

}

else
{
	header('Location: /admin/login');
	exit();
}

















?>