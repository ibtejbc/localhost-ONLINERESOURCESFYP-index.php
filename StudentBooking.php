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

$result = mysqli_query($conn, "SELECT * FROM Student WHERE Username = '{$_SESSION['Username']}'" );
while($row = mysqli_fetch_array($result))
	


{

$Username= $row['Username'];
$StudentID= $row['StudentID'];
$Email= $row['Email'];
$Course= $row['Course'];
}

mysqli_close($conn);
?>
<style type="text/css">
body {
	background-color: #ccc;
	background-image: url(StaffR.png);
}
</style>


<table width="100%" border="0" align="center">



<center>
<form action = "InsertStudentBooking.php" method = "post">
<table width="100%" border="0" align="center">




<tr>
<td><center><b>Student ID: </td> </tr>
<td><center><b><input type = "varchar" name = "StudentID" value = " <? echo $StudentID; ?> " readonly  /></td></tr>


<tr>
<td><center><b>Username: </td> </tr>
<td><center><b><input type = "varchar" name = "Username"  value = "<? echo $Username; ?> " readonly  /></td></tr>


<tr>
<td><center><b>Email: </td> </tr>
<td><center><b><input type = "varchar" name = "Email"  value =" <? echo $Email; ?> " readonly  /></td></tr> 


<tr>
<td><center><b>Course: </td> </tr>
<td><center><b><input type = "varchar" name = "Course"  value =" <? echo $Course; ?> " readonly  /></td></tr>  
 


<tr>
<td><center><b>Room: </td> </tr>
<td><center><b><input type = "varchar" name = "Room" placeholder = "Enter Room Name" required autofocus autocomplete = "off"  /></td></tr>

<tr>
<td><center><b>Start Date: </td> </tr>
<td><center><b><input type = "date" name = "RequestStartDate" placeholder = "Start Date" /></td></tr>

<tr>
<td><center><b>End Date:</td> </tr>
<td><center><b> <input type = "date" name = "RequestEndDate" placeholder = "End Date" /></td></tr>


<tr>
<td><center><b>Start Time: </td> </tr>
<td><center><select name = "RequestStartTime" id = "RequestStartTime" placeholder = "Start Time" required>
<option value ="" >  </option>
<option value ="7.00 AM" > 7.00 AM </option>
<option value ="8.00 AM" > 8.00 AM  </option>
<option value ="9.00 AM" > 9.00 AM </option>
<option value ="10.00 AM" > 10.00 AM</option>
<option value ="11.00 AM" > 11.00 AM </option>
<option value ="12.00 PM" > 12.00 PM</option>
<option value ="1.00 PM" > 1.00 PM</option>
<option value ="2.00 PM" > 2.00 PM </option>
<option value ="3.00 PM" > 3.00 PM</option>
<option value ="4.00 PM" > 4.00 PM </option>
<option value ="5.00 PM" > 5.00 PM </option> </b>  </td> </tr>


<tr>
<td><center><b>End Time: </td> </tr>
<td><center><select name = "RequestEndTime" id = "RequestEndTime" placeholder = "End Time" required>
<option value ="" >  </option>
<option value ="7.00 AM" > 7.00 AM </option>
<option value ="8.00 AM" > 8.00 AM </option>
<option value ="9.00 AM" > 9.00 AM </option>
<option value ="10.00 AM" > 10.00 AM </option>
<option value ="11.00 AM" > 11.00 AM </option>
<option value ="12.00 PM" > 12.00 PM</option>
<option value ="1.00 PM" > 1.00 PM</option>
<option value ="2.00 PM" > 2.00 PM </option>
<option value ="3.00 PM" > 3.00 PM</option>
<option value ="4.00 PM" > 4.00 PM </option>
<option value ="5.00 PM" > 5.00 PM </option> </b>  </td> </tr>


<tr>
<td><center><b> Group Leader:</td> </tr>
<td><center><b><input type = "varchar" name = "RequestSendTo" placeholder = "Group Leader" required autofocus autocomplete = "off"  /></td></tr>




<tr>
<td><center><b> Reason:</td> </tr>
<td><center><b><input type = "varchar" name = "Reason" placeholder = "Reason" required autofocus autocomplete = "off"  /></td></tr>

<tr>
<td><center><b> Status:</td> </tr>
<td><center><b><input type = "varchar" name = "Status" value = "Pending" readonly  /></td></tr>





<br> <br>
<tr> <td> </td></tr> <tr> <td> </td></tr> <tr> <td> </td></tr> <tr> <td> </td></tr>
<tr> <td> <center> <input type="submit" class="button" value="Submit">

	<input type="button" onclick="location = 'CancelStudentBooking.php'" value="View & Cancel"> 
    <input type="button" onclick="location = 'EditStudentBooking.php'" value="View & Edit"> </td> </tr>
	



<!DOCTYPE html>
<html>
<head>
<style> 
input[type=button], input[type=submit] {
    background-color: #000;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</center>
</form>
</style>
</body>
</html>


