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
	$result = mysqli_query($con, "SELECT * FROM Booking WHERE BookingID = '$query'");

while ($row = mysqli_fetch_array($result))
{
	$BookingID = $row['BookingID'];
	$StaffID = $row['StaffID'];
	$Username = $row['Username'];
	$Email= $row['Email'];
	$Room = $row['Room'];
	$StartDate = $row ['StartDate'];
	$EndDate = $row ['EndDate'];
	$StartTime = $row ['StartTime'];
	$EndTime = $row ['EndTime'];
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
<form action = "EditAllStaffBookingButton.php" method = "post">
<b>Booking ID: <input type = "text" autofocus autocomplete = "off" name = "BookingID" value="<?php echo $query; ?>" readonly /><br><br>
Staff ID: <input type = "text"autofocus autocomplete = "off" name = "StaffID" value="<?php echo $StaffID; ?>" readonly /><br><br>
Username: <input type = "text" autofocus autocomplete = "off"name = "Username" value="<?php echo $Username; ?>" readonly /><br><br>
Email: <input type = "text"autofocus autocomplete = "off" name = "Email" value="<?php echo $Email; ?>" readonly /><br><br>
Room: <input type = "text" autofocus autocomplete = "off"name = "Room" value="<?php echo $Room; ?>" /><br><br>
Start Date: <input type = "date"autofocus autocomplete = "off" name = "StartDate" value="<?php echo $StartDate; ?>" /><br><br>
End Date: <input type = "date"autofocus autocomplete = "off" name = "EndDate" value="<?php echo $EndDate; ?>" /><br><br>
Start Time: <input type = "text" autofocus autocomplete = "off"name = "StartTime" value="<?php echo $StartTime; ?>" /><br><br>
End Time: <input type = "text" autofocus autocomplete = "off"name = "EndTime" value="<?php echo $EndTime; ?>" /><br><br>
Reason: <input type = "text" autofocus autocomplete = "off"name = "Reason" value="<?php echo $Reason; ?>" /><br><br>


<input type="submit" value="Edit"></br>
</form>
</body>
</html>
