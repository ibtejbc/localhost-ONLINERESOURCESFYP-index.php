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


<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Online";

$con = mysqli_connect($servername,$username,$password,$dbname);
	if(mysqli_connect_error()) 
	{
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
	if(isset($_POST['Search']))
	{
		$query= $_POST['Search'];
	}
	$result = mysqli_query($con, "SELECT * FROM BookingRequest WHERE RequestBookingID = '$query'");

while ($row = mysqli_fetch_array($result))
{
	$RequestBookingID = $row['RequestBookingID'];
	$StudentID = $row['StudentID'];
	$Username = $row['Username'];
	$Email= $row['Email'];
	$Room = $row['Room'];
	$RequestStartDate = $row ['RequestStartDate'];
	$RequestEndDate = $row ['RequestEndDate'];
	$RequestStartTime = $row ['RequestStartTime'];
	$RequestEndTime = $row ['RequestEndTime'];
	$Reason = $row ['Reason'];


}
?>
<html>
<style type="text/css">
body {
	background-color: #CCC;
	background-image: url(StaffR.png);
	background-repeat: no-repeat;
}


input[type=button], input[type=submit], input[type=reset] {
    background-color: #000;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
<center>
<br><br><br>
<form action = "CancelAllStudentBookingButton.php" method = "post">
<b>Booking ID: <input type = "text" name = "RequestBookingID" value="<?php echo $query; ?>"/><br><br>
Student ID: <input type = "text"   name = "UserID" value="<?php echo $StudentID; ?>"/><br><br>
Username: <input type = "text" name = "Username" value="<?php echo $Username; ?>"/><br><br>
Email: <input type = "text" name = "Email" value="<?php echo $Email; ?>"/><br><br>
Room: <input type = "text"  name = "Room" value="<?php echo $Room; ?>" /><br><br>
Start Date: <input type = "text" name = "StartDate" value="<?php echo $RequestStartDate; ?>" /><br><br>
End Date: <input type = "text" name = "EndDate" value="<?php echo $RequestEndDate; ?>" /><br><br>
Start Time: <input type = "text"  name = "StartTime" value="<?php echo $RequestStartTime; ?>" /><br><br>
End Time: <input type = "text"   name = "EndTime" value="<?php echo $RequestEndTime; ?>" /><br><br>
Reason: <input type = "text"  name = "Reason" value="<?php echo $Reason; ?>" /><br><br>


<input type="submit" value="Cancel"></br>
</form>
</body>
</html>
