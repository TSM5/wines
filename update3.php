<?php
$date=$_POST['currdate'];	
$servername='localhost';
$username='******';
$password='********';
$db="tsm";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
	echo "connection failed";
}
else
{
   
	$sql="select * from stock_entry where curdate='$date'";
	
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {     //$row['brandname']
		
		echo 
		"
		<table border=\"1\">
		<tr>
		<th> brandname </th>
		</tr>
		 <tr>
		 <td> ".$row['brandname'] ."</td>
		 <br>
		 </tr>
		 </table>";
	}
}
	else 
	{
		echo 'fucked up';  

	}
}?>
<html>
	<head>
	<title> next</title>
	<script>
	 function fun()
	 {
		 window.print();
		
	 }
	 </script>
	</head>
	<body>
	<form action="wines.php">
	<input id="submit"  type="submit" value="next" />
	</form>
	<input type="submit" onclick="fun()"/>
	</body>
	</html>