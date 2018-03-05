<table width="100%" border="0" align="center">

<tr>
<th> <a href="Studentpage.php"><img src = "logo.png" alt = "IBTE Logo" width = "200" height = "100"/> </th></a>
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
	font-family: default font;
}
WordWord {
	font-size: medium;
}
 
 
body {
	background-image: url();
	background-color: #FFF;
}

<!--End Of Navigation-->
</style> 
</head> 
<body class="Words"> 
<div id="navbar"> 
  <ul> 
	<li><a href="Studentpage.php">HOME</a></li> 
	

	
	<div class="dropdown">
	<li><button class="dropbtn">BOOKING</button> </li>
<div class="dropdown-content">
<a href="StudentScheduleBooking.php">SCHEDULE BOOKING</a>
<a href="StudentBooking.php">BOOK RESOURCES</a>
<a href="StudentViewBooking.php">VIEW BOOKING</a>
</div>
</div>

	<div class="dropdown">
	<li><button class="dropbtn">RESOURCES</button> </li>
<div class="dropdown-content">
<a href="StudentToViewResourcesCategory.php">RESOURCES CATEGORY</a>

</div>
</div>

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

<!DOCTYPE html>
<html>
<head>
<style>

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #0489B1;
    color: white;
}

body {
	background-image: url(StaffR.png);
	background-color: #CCC;
}
</style>
</head>


 <table border = "0" align = "right">
 
<tr>
<th><br><br><br><form action = "CancelAllStudentBooking.php" method = "post"> 
<input type = "text" name = "Search" autofocus autocomplete = "off" placeholder = "Enter Your Booking ID">  <input type = "submit" name = "submit" value = "Search & Cancel" > </th>
</form>
<th><br><br><br><form action = "EditAllStudentBooking.php" method = "post"> 
<input type = "text" placeholder = "Enter Your Booking ID" autofocus autocomplete = "off" name = "Search"> <input type = "submit" name = "submit" value = "Search & Edit" ></th></tr>
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

$result = mysqli_query($conn, "SELECT * FROM BookingRequest WHERE Username = '{$_SESSION['Username']}'" );


	
	
Echo "<style type='text/css'>
body {
	background-color: #E1E1E1;
	background-image: url(StaffR.png);
}
</style>

<body>
<table border = '0' id = 'customers'>
<tr>
<br><br><br><br> <br><br><br>
<th>Booking ID </th>
<th>User ID </th>
<th>Username </th>
<th>Email </th>
<th>Room </th>
<th>Start Date </th>
<th>End Date </th>
<th>Start Time </th>
<th>End Time </th>
<th> Group Leader </th>
<th> Reason </th>
<th> Status </th>";


while($row = mysqli_fetch_array($result))
{
Echo "<tr>


<td><center> ".$row['RequestBookingID']."</b> </td>
<td><center> ".$row['StudentID']."</b> </td>
<td><center> ".$row['Username']."</b> </td>
<td><center> ".$row['Email']."</b> </td>
<td><center> ".$row['Room']."</b> </td>
<td><center> ".$row['RequestStartDate']."</b> </td>
<td><center> ".$row['RequestEndDate']."</b> </td>
<td><center>".$row['RequestStartTime']."</b> </td>
<td><center> ".$row['RequestEndTime']." </td>
<td><center> ".$row['RequestSendTo']."</b> </td>
<td><center> ".$row['Reason']."</b> </td>
<td><center> ".$row['Status'],"</b> </td>";
}

Echo "</table>'

</body>";
mysqli_close($conn);
?>

<br> <br>
<center>

<button onClick="window.print()">Print </button></center>
</body>

