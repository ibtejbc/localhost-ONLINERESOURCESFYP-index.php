<table width="100%" border="0" align="center">

<tr>
<th> <a href="Adminpage.php"><img src = "logo.png" alt = "IBTE Logo" width = "200" height = "100"/> </th></a>
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
	font-family: "Comic Sans MS", cursive;
}
WordWord {
	font-size: medium;
}
 
 
body {
	background-image: url();
	background-color: #CCC;
}

<!--End Of Navigation-->
</style> 
</head> 
<body class="Words"> 
<div id="navbar"> 
  <ul> 
	<li><a href="Adminpage.php">HOME</a></li> 
	
	<div class="dropdown">
 <li><button class="dropbtn">USERS</button> </li>
  <div class="dropdown-content">
    <a href="StaffRegistration.php">Registration Staff</a>
    <a href="StudentRegistration.php">Registration Student</a>
    <a href="UsersDetails.php">User Details</a>
	</div>
	</div>
	
	<div class="dropdown">
	<li><button class="dropbtn">RESOURCES</button> </li>
<div class="dropdown-content">
<a href="ResourcesCategory.php">Resources Category</a>
<a href="EditResources.php">Edit Resources</a>
</div>
</div>

	<div class="dropdown">
	<li><button class="dropbtn">BOOKING</button> </li>
<div class="dropdown-content">
<a href="ViewBooking.php">View Booking</a>
<a href="BookingRequest.php">Booking Request</a>
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

<br>


<table width="100%" border="9" align="center">

<tr>
<th> <input type="button" onClick="location = 'ViewBooking.php'" value="AV Room"></th>
<th> <input type="button" onClick="location = 'BSElab.php'" value="BSE Lab"></th>
<th> <input type="button" onClick="location = 'Computerlab.php'" value="Computer Lab"></th>
<th> <input type="button" onClick="location = 'LT.php'" value="Literature Theater"></th>
<th> <input type="button" onClick="location = 'PLElab.php'" value="PLE Lab"></th>
<th> <input type="button" onClick="location = 'Surau.php'" value="Surau"></th>
</table>



<?php
//This program is used to read records from student table and display in the browser
$con = mysql_connect('localhost', 'root', 'mysql');
if(!$con)
{
die('Could not Connect Sucessfully' . mysql_error());
}
echo '' . "<br>";
mysql_select_db("Online");


$result = mysql_query("SELECT Room, Username, StartDate, EndDate, StartTime, EndTime, Status FROM Booking WHERE ( Room = 'AV Room' AND StartDate = '2018-03-06')");


echo "<table border = '2'> <table id = resource>
<br><br>
<center><b>List All AV Room Resources Booking </center>
<br> <br>
Tuesday, 6 March 2018<br>

<tr>
<th>BOOKING ID</th>
<th>STAFFID</th>
<th>ROOM</th>
<th>START DATE</th>
<th>END DATE</th>
<th>START TIME</th>
<th>END TIME</th>
<th>STATUS</th>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BookingID'] . "</td>";
echo "<td>" . $row['StaffID'] . "</td>";
echo "<td>" . $row['Room'] . "</td>";
echo "<td>" . $row['StartDate'] . "</td>";
echo "<td>" . $row['EndDate'] . "</td>";
echo "<td>" . $row['StartTime'] . "</td>";
echo "<td>" . $row['EndTime'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<style>

#resource {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#resource td, #resource th {
    border: 1px solid #ddd;
    padding: 8px;
}

#resource tr:nth-child(even){background-color: #f2f2f2;}
#resource tr:nth-child(odd){background-color: #f2f2f2;}

#resource tr:hover {background-color: #ddd;}

#resource th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #0489B1;
    color: white;
}
</style>
</head>

<br><br>

<center>
<input type="button" onClick="location = 'Monday305AVRoom.php'" value="Previos">
<input type="button" onClick="location = 'Wednesday307AVRoom.php'" value="Next"></center>

<button onClick="window.print()">Print </button>




</body>
</html>