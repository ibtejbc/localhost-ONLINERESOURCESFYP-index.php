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
	$result = mysqli_query($con, "SELECT * FROM Student WHERE UserID = '$query'");

while ($row = mysqli_fetch_array($result))
{
	$UserID = $row['UserID'];
	$Username = $row['Username'];
	$Password = $row['Password'];
	$Usertype = $row['Usertype'];
	$Firstname = $row['Firstname'];
	$Lastname = $row ['Lastname'];
	$Email = $row ['Email'];
	$PhoneNo = $row ['PhoneNo'];
	$DepartmentCourse = $row ['Course'];

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
<a href="Adminpage.php"><img src = "logo.png" alt = "IBTE Logo" width = "200" height = "100"/></a> 
<h2> IBTE JEFRI BOLKIAH CAMPUS RESOURCES ONLINE BOOKING </h2>  <br> <br>
<form action = "EditAllRegistration.php" method = "post">
<b>User ID: <input type = "text" name = "UserID" value="<?php echo $query; ?>"/><br><br>
Username: <input type = "text" name = "Username" value="<?php echo $Username; ?>"/><br><br>
Password: <input type = "text" name = "Password" value="<?php echo $Password; ?>"/><br><br>
Usertype: <input type = "text" name = "Usertype" value="<?php echo $Usertype; ?>"/><br><br>
Firstname: <input type = "text" name = "Firstname" value="<?php echo $Firstname; ?>" /><br><br>
Lastname: <input type = "text" name = "Lastname" value="<?php echo $Lastname; ?>" /><br><br>
Email: <input type = "text" name = "Email" value="<?php echo $Email; ?>" /><br><br>
PhoneNo: <input type = "text" name = "PhoneNo" value="<?php echo $PhoneNo; ?>" /><br><br>
Department: <input type = "text" name = "Course" value="<?php echo $Course; ?>" /><br><br> </b>


<input type="submit" value="Edit"></br>
</form>
</body>
</html>
