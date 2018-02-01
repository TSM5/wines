<?php
$shopname=$_POST['shopname'];
	$opstock=$_POST['opstock'];
	$costock=$_POST['costock'];
	$invoice=$_POST['invoice'];
	$transfer=$_POST['transfer'];
	$expenditure=$_POST['expenditure'];
	$brandname=$_POST['brandname'];
	$size=$_POST['size'];
	$date=$_POST['curdate'];
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
     $yesterday=strtotime($date)-60*60*24;
	$sq="select * from stock_entry where curdate='$yesterday'";
       $result = $conn->query($sq);
	    $row = $result->fetch_assoc();
	   echo $row['costock'];
	if ($result->num_rows > 0) {
		 $row = $result->fetch_assoc();
		 
		
	}
    else 
{
 echo 'fucked up at yesterday';
}
	 
	  $sql="insert into stock_entry values('$shopname','$brandname','$opstock','$date','$size','$invoice','$transfer','$costock','$expenditure')";
	$s=$conn->query($sql); 
	 $row1 =$s->fetch_assoc();
	
	if($row['costock']!=$row1['opstock'])
	{
		echo 'opening stock is not valid';
     }
		else
		{
	        if($s === TRUE)
		{
			
	  echo "
	    <table border=\"1\">
		<tr>
		<th> BRAND NAME </th>
        <th> OPENING STOCK </th>
        <th> SIZE </th>
        <th> INVOICE </th>
        <th> TRANSFER </th>
        <th> CLOSING STOCK </th>
        <th> EXPENDITURE </th>
		</tr>
		<tr>
		<td> $brandname </td>
		<td> $opstock </td>
		<td> $size </td>
		<td> $invoice</td>
		<td> $transfer </td>
		<td> $costock </td>
		<td> $expenditure </td>
		
		</table>";
	}
	else 
	{
		echo 'failed adding';
	}
		}
		
}
	?>
	<html>
	<head>
	<title> modify or continue </title>
	</head>
	<body>
	<form action="edit.html">
	<input id="submit"  type="submit" value="update" />
	</form>
	<form action="wines.php">
	<input id="submit"  type="submit" value="next" />
	</form>
	</body>
	</html>