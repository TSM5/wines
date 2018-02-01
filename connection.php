<?php
 session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
if($user=='*****'&&$pass=='******')
 {
	
	 $_SESSION['user']=$user;
     $_SESSION['pass']=$pass;
	  header('Location: http://localhost:81/wines/wines.php');
	
 }
else{
	echo 'wrong pass or id';
}

?>