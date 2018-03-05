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
	background-color: #FFF;
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
	$result = mysqli_query($con, "SELECT * FROM Student WHERE StudentID = '$query'");

while ($row = mysqli_fetch_array($result))
{
	$StudentID = $row['StudentID'];
	$Username = $row['Username'];
	$Password = $row['Password'];
	$Firstname = $row['Firstname'];
	$Lastname = $row ['Lastname'];
	$Email = $row ['Email'];
	$PhoneNo = $row ['PhoneNo'];
	$Course = $row ['Course'];

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
<form action = "DeleteSearchAllStudentRegistration.php" method = "post">
<b>Student ID: <input type = "text" name = "StudentID" value="<?php echo $query; ?>"/><br><br>
Username: <input type = "text" name = "Username" value="<?php echo $Username; ?>"/><br><br>
Password: <input type = "text" name = "Password" value="<?php echo $Password; ?>"/><br><br>
Firstname: <input type = "text" name = "Firstname" value="<?php echo $Firstname; ?>" /><br><br>
Lastname: <input type = "text" name = "Lastname" value="<?php echo $Lastname; ?>" /><br><br>
Email: <input type = "text" name = "Email" value="<?php echo $Email; ?>" /><br><br>
PhoneNo: <input type = "text" name = "PhoneNo" value="<?php echo $PhoneNo; ?>" /><br><br>
Department: <input type = "text" name = "Course" value="<?php echo $Course; ?>" /><br><br></b>


<input type="submit" value="Delete"></br>
</form>
</body>
</html>
