<style type="text/css">
body {
	background-image: url(BackgroundAdmin.jpg);
	background-repeat: repeat;
}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Online";

//Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn)
{
die("Could not Connect Sucessfully" . mysqli_connect_error());
}

$sql = "UPDATE Student SET StudentID ='$_POST[StudentID]',Username = '$_POST[Username]',Password = '$_POST[Password]',Firstname = '$_POST[Firstname]',Lastname = '$_POST[Lastname]',Email = '$_POST[Email]',PhoneNo = '$_POST[PhoneNo]',Course = '$_POST[Course]' WHERE StudentID = '$_POST[StudentID]'";

if (mysqli_query($conn, $sql))
{
	echo "ONE[1] record edit successfully, <a href= 'Studentcategory.php'>Back </a>.";
}
else
{
	echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>
