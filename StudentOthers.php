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

<br>


<table width="100%" border="0" align="center">

<tr>
<th> <input type="button" onClick="location = 'StudentToViewResourcesCategory.php'" value="All Department"></th>
<th> <input type="button" onClick="location = 'StudentSICTdepartment.php'" value="SICT Department"></th>
<th> <input type="button" onClick="location = 'StudentBSEdepartment.php'" value="BSE Department"></th>
<th> <input type="button" onClick="location = 'StudentBMAdepartment.php'" value="BMA Department"></th>
<th> <input type="button" onClick="location = 'StudentICEdepartment.php'" value="ICE Department"></th>
<th> <input type="button" onClick="location = 'StudentPLEdepartment.php'" value="PLE Department"></th>
<th> <input type="button" onClick="location = 'StudentOthers.php'" value="Others Department"></th>
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
$result = mysql_query("SELECT * FROM ListResources WHERE Department = 'Others'");
echo "<table border = '2'> <table id = resource>
<br><br>
<center><b>List Of Others Department<center>
<br> <br>
<tr>
<th>ROOM ID</th>
<th>ROOM</th>
<th>DEPARTMENT</th>  
<th>LEVEL FLOOR</th>
<th>GROUP CODE</th>
<th>COURSE</th>
<th>STAFF IN CHARGE</th>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['RoomID'] . "</td>";
echo "<td>" . $row['Room'] . "</td>";
echo "<td>" . $row['Department'] . "</td>";
echo "<td>" . $row['LevelFloor'] . "</td>";
echo "<td>" . $row['GroupCode'] . "</td>";
echo "<td>" . $row['Course'] . "</td>";
echo "<td>" . $row['StaffinCharge'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
<br> <br>

<center>
<button onClick="window.print()">Print </button></center>

<style>
body {
	background-image: url();
	background-color: #CCC;
}
</style>
</body>
</html>

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

#resource tr:nth-child(even){background-color: #85C1E9;}
#resource tr:nth-child(odd){background-color: #D8B5F0;}

#resource tr:hover {background-color: #ddd;}

#resource th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:#2980B9 ;
    color: white;
}
</style>
</head>