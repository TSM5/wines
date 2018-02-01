<?php
$servername='localhost';
$username='*****';
$password='*****';
$db="tsm";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
	echo "connection failed";
}
else{
	
	header('Location: http://localhost:81/wines/wines.html');
	  
	$shopname=$_POST['shopname'];
	$opstock=$_POST['opstock'];
	$costock=$_POST['costock'];
	$invoice=$_POST['invoice'];
	$transfer=$_POST['transfer'];
	$expenditure=$_POST['expenditure'];
	$brandname=$_POST['brandname'];
	$size=$_POST['size'];
	$date=$_POST['curdate'];

	$sql="insert into stock_entry values('$shopname','$brandname','$opstock','$date','$size','$invoice','$transfer','$costock','$expenditure')";
	if ($conn->query($sql) === TRUE)
		{
	echo 'record added succesfully';
	}
	else 
	{
		echo 'failed adding';
	}
}
	?>
	
	
	
	