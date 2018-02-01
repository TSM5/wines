<?php
$servername='localhost';
$username='****';
$password='*************';
$db="test";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
	echo "connection failed";
}
else{
echo 'connection success';
}
$sql = "insert into test values(2,'ram')";
if($conn->query($sql)===TRUE)
{echo "inserted";
}
else 
{echo "failed";
}


?>