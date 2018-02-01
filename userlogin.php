<html>
<head> 
<title> user login </title>
</head>
<body>
<form action="connection.php" method="POST">
USER: <input type="text" name="user"/><br>
PASS: <input type="password" name="pass"/> <br>
<input type="submit" value="submit" name="submitbutton"/>
</form>
</body>
</html>
<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
if($user=='admin'&&$pass=='admin')
 {
   echo 'correct password';
}



?>