<table width="100%" border="0" align="center">

<tr>
<th> <a href="Staffpage.php"><img src = "logo.png" alt = "IBTE Logo" width = "200" height = "100"/> </th></a>
<th> IBTE JEFRI BOLKIAH CAMPUS RESOURCES ONLINE BOOKING </th>
<th> <a href = "logout.php"> Logout </th>


</table>
  
<!DOCTYPE html>
<style type="text/css"> 

 
#navbar ul { 
	margin: 0; 
	padding: 5px; 
	list-style-type: none; 
	text-align: center; 
	background-color: #000; 
	} 
 
#navbar ul li {  
	display: inline; 
	} 
 
#navbar ul li a { 
	text-decoration: none; 
	padding: .2em 1em; 
	color: #fff; 
	background-color: #000; 
	} 
 
#navbar ul li a:hover { 
	color: #000; 
	background-color: #3CB371;
	} 
.Words {
	font-family: "Default Font";
}
WordWord {
	font-size: medium;
}
 
 
body {
	background-image: url(BackgroundAdmin.jpg);
	background-color: #FFF;
}

<!--End Of Navigation-->
</style> 
</head> 
<body class="Words"> 
<div id="navbar"> 
  <ul> 
	<li><a href="Staffpage.php">HOME</a></li> 
	
	
	<div class="dropdown">
	<li><button class="dropbtn">RESOURCES</button> </li>
<div class="dropdown-content">
<a href="StafflistResources.php">RESOURCES CATEGORY</a>

</div>
</div>

	<div class="dropdown">
	<li><button class="dropbtn">BOOKING</button> </li>
<div class="dropdown-content">
<a href="StaffScheduleBooking.php">SCHEDULE BOOKING</a>
<a href="StaffBooking.php">BOOK RESOURCES</a>
<a href="StaffViewBooking.php">VIEW BOOKING</a>
</div>
</div>

	<li><a href="StaffViewStudentReuqest.php">REQUEST</a></li> 
  </ul> 
</div>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #000;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>

<style>

#staff {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#staff td, #staff th {
    border: 1px solid #ddd;
    padding: 8px;
}

#staff tr:nth-child(even){background-color: #f2f2f2;}
#staff tr:nth-child(odd){background-color: #f2f2f2;}

#staff tr:hover {background-color: #ddd;}

#staff th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #0489B1;
    color: white;
}
</style>

 <table align = "right">

 <tr>

<th><form action = "CancelAllStaffBooking.php" method = "post"> 
<br><br><br><input type = "text" name = "Search" placeholder = "Enter Booking ID" autofocus autocomplete = "off">  <input type = "submit" name = "submit" value = "Search & Cancel" ></br></th>
</form>
<td><form action = "EditAllStaffBooking.php" method = "post"> 
<br><br><br><input type = "text" name = "Search" placeholder = "Enter Booking ID" autofocus autocomplete = "off">  <input type = "submit" name = "submit" value = "Search & Edit" ></br></td></tr>
</form>


<?php
session_start();
?>
<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Online";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection 
if (mysqli_connect_error()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn, "SELECT * FROM Booking WHERE Username = '{$_SESSION['Username']}'" );

Echo "<style type='text/css'>
body {
	background-color: #E1E1E1;
	background-image: url(StaffR.png);
}
</style>
<body>
<table width='100%' border='1' align='center' <table id = 'staff'>
<tr>
<br><br> <br> <br><br><br><br>
<th>Booking ID </th>
<th>Staff ID </th>
<th>Username </th>
<th>Department </th>
<th>Room </th>
<th>Start Date </th>
<th>End Date </th>
<th>Start Time </th>
<th>End Time </th>
<th> Reason </th>
<th> Status </th>";

while($row = mysqli_fetch_array($result))
{
Echo "<tr>


<td><center> ".$row['BookingID']." </b> </td>
<td><center> ".$row['StaffID']." </b> </td>
<td><center>".$row['Username']."</b> </td>
<td><center> ".$row['Email']."</b> </td>
<td><center> ".$row['Room']."</b> </td>
<td><center> ".$row['StartDate']."</b> </td>
<td><center> ".$row['EndDate']."</b> </td>
<td><center>".$row['StartTime']."</b> </td>
<td><center>".$row['EndTime']."</b> </td>
<td><center> ".$row['Reason']."</b> </td>
<td><Center> ".$row['Status']."</b> </td>";
}

Echo "</table>

<br> <br>
<center>
<button onClick='window.print()'>Print </button></center>


</body>";

mysqli_close($conn);
?>