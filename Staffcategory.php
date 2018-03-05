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
	font-family: "Default Font;
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
    <a href="StaffRegistration.php">REGISTRATION STAFF</a>
    <a href="StudentRegistration.php">REGISTRATION STUDENT</a>
    <a href="UsersDetails.php">USER DETAILS</a> 
	</div>
	</div>
	
	<div class="dropdown">
	<li><button class="dropbtn">RESOURCES</button> </li>
<div class="dropdown-content">
<a href="ResourcesCategory.php">RESOURCES CATEGORY</a>
<a href="EditResources.php">EDIT RESOURCES</a>
</div>
</div>

	<div class="dropdown">
	<li><button class="dropbtn">BOOKING</button> </li>
<div class="dropdown-content">
<a href="ViewBooking.php">SCHEDULE BOOKING</a>
<a href="BookingRequest.php">BOOKING REQUEST</a>
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
</style>
</head>
<body>



<html>
<body>

<br>
<center>

<table width="100%" border="0" align="center">

<tr><td><center><input type="button" onClick="location = 'UsersDetails.php'" value="All Category"></td>
<td><center><input type="button" onClick="location = 'Studentcategory.php'" value="Student Category"></td></center>

<table align = "right">

 <tr>

<th><form action = "DeleteAllRe.php" method = "post"> 
<br><input type = "text" name = "Search" placeholder = "Enter User ID" autofocus autocomplete = "off">  <input type = "submit" name = "submit" value = "Search & Delete" ></br></th>
</form>
<td><form action = "EditReStaff.php" method = "post"> 
<br><input type = "text" name = "Search" placeholder = "Enter User ID" autofocus autocomplete = "off">  <input type = "submit" name = "submit" value = "Search & Edit" ></br></td></tr>
</form>
<b>List Of Staff Records From Registration
<?php
//This program is used to read records from student table and display in the browser
$con = mysql_connect('localhost', 'root', 'mysql');
if(!$con)
{
die('Could not Connect Sucessfully' . mysql_error());
}
echo '' . "<br>";
mysql_select_db("Online");
$result = mysql_query("SELECT * FROM Staff ORDER BY StaffID");
echo "<table border = '2'> <table id = customers>


<br> <br>
<tr>
<th>STAFF ID</th>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>EMAIL</th>
<th>PHONENO</th>
<th>DEPARTMENT</th>
<th>GROUP CODE</th>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['StaffID'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td>" . $row['Firstname'] . "</td>";
echo "<td>" . $row['Lastname'] . "</td>";
echo "<td> <a href = 'mailto: " . $row['Email'] . "'> " . $row['Email'] . "</a></td>";
echo "<td>" . $row['PhoneNo'] . "</td>";
echo "<td>" . $row['DepartmentCourse'] . "</td>";
echo "<td>" . $row['GroupCode'] . "</td>";
echo "</tr>";
}
echo "</table>";



mysql_close($con);
?>
<br> <br>

<button onClick="window.print()">Print </button></center>



</body>
</html>