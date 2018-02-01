<?php
$shopname=$_POST['shopname'];
$brandname=$_POST['brandname'];
	$size=$_POST['size'];
	$date=$_POST['curdate'];
	$extra=$_POST['mod'];
	$answer=$_POST['answer'];
$servername='localhost';
$username='*********';
$password='******';
$db="tsm";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
	echo "connection failed";
}
else{
	 switch($extra)
   {
   case 2: 
             $sql="update  stock_entry set opstock='$answer' where shopname='$shopname' and brandname='$brandname'
			 and curdate='$date' and size='$size'";break;
   case 3:
	         $sql="update  stock_entry set invoice='$answer' where shopname='$shopname' and brandname='$brandname'
			 and curdate='$date' and size='$size'";break;
   case 4:
             $sql="update  stock_entry set transfer='$answer' where shopname='$shopname' and brandname='$brandname'
			 and curdate='$date' and size='$size'";break;
   case 5:	
             $sql="update  stock_entry set costock='$answer' where shopname='$shopname' and brandname='$brandname'
			 and curdate='$date' and size='$size'";break;  
   case 6:
             $sql="update  stock_entry set expenditure='$answer' where shopname='$shopname' and brandname='$brandname'
			 and curdate='$date' and size='$size'";break;  
   }			 
		if ($conn->query($sql) === TRUE)
		{
	echo 'record updated succesfully';
	}
	else 
	{
		echo 'failed adding';  

	}
}	
	?>
	<html>
	<head>
	<title> modify or continue </title>
	</head>
	<body>
	<form action="wines.php">
	<input id="submit"  type="submit" value="next" />
	</form>
	</body>
	</html>
	