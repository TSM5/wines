<?php
session_start();
if(!(isset($_SESSION['user'])&&isset($_SESSION['pass'])))
{
 header('Location: http://localhost:81/wines/userlogin.html');

 }
  
?>
<html>
<head>
<title> WINES SHEETS </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="edit.css"/>
</head>
<body>
<h1> DAILY ENTRY LIST </h1>
<form action="logout.php">
<input class="a" type="submit" value="logout"/>
</form>
<hr>
<form action="wines2.html" method="post" >
 <span>click to get date wise sales: </span> <input class="x" type="submit" value="dailydatelist"/> 
</form><hr>
<form action="update2.php" method="post" > 
<span>please select the shop name:</span><select id="shop" name="shopname">
            <option value="SRINIVASA WINES"> 1.SRINIVASA WINES</option>
            <option value="MALLIKARJUNA WINES"> 2.MALLIKARJUNA WINES</option>
            <option value="SLV RAMANA WINES"> 3. SLV RAMANA WINES</option>
			 <option value="WHOLE SALE 2"> 4. WHOLE SALE 2</option> 
		</select><br>

<span>please select the date of sales:</span><input id="date1" type="date" name="curdate"/>

<table>
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
 <th> <select id="brand" name="brandname">
            <option value="MCW"> MCW</option>
            <option value="IBW"> IBW</option>
            <option value="R STAG"> R STAG</option>
		</select>	
	</th>
 <th> <input id="opstock" type="text" name="opstock"/> </th>
  <th> <select id="size" name="size">
            <option value="Q"> Q</option>
            <option value="P"> P</option>
            <option value="N"> N</option>
			<option value="D"> D</option>
			<option value="650ML">650ML</option> 
            <option value="330ML"> 330ML</option>			
		</select>	
  </th>
 <th><input id="invoice" type="text" name="invoice"/> </th>
  <th><input id="transfer" type="text" name="transfer"/> </th>
 <th> <input id="costock"type="text" name="costock"/></th>
 <th> <input id="expend" type="text" name="expenditure"/> </th>
</tr> 
<br>
</table>
<input class="submit1"  type="submit" />
</form><br>
<hr>

</body>
</html>

		



































