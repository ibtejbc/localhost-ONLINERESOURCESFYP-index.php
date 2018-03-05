<table width="100%" border="0" align="center">

<tr>
<th> <a href="Adminpage.php"><img src = "logo.png" alt = "IBTE Logo" width = "200" height = "100"/> </th></a>
<th> IBTE JEFRI BOLKIAH CAMPUS RESOURCES ONLINE BOOKING </th>
<th> <a href = "logout.php"> Logout </th>

</table>

<style type="text/css">
body {
	background-color: #CCC;
	background-image: url(StaffR.png);
}
</style>
<body onload = "noBack();"
	onpagehow "if (event.persisted) noBack();" onunload = "">
	
	<script type = "text/javascript">
	window.history.forward();
	function noBack() { window.history.forward();}
	</script>
  
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
	font-family: font default;
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
	<li><a href="Adminpage.php"  >HOME</a></li> 
	
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
<a href="ResourcesCategory.php">RESOURCES CATEGORY </a>
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
<center>
<form action = "InsertStaff.php" method = "post">
<table width="100%" border="0" align="center">

<br><br>
<b>Staff Registration </b>
<tr>

<td><center><b>Staff ID:  </td> </tr>
<tr>
<td><center><input type = "varchar" name = "StaffID" placeholder = "Eg.U1"  required autofocus autocomplete = "off"  /></td></tr>

<tr>
<td><center><b>Username: </td> </tr>
<tr>
<td><center><input type = "varchar" name ="Username" placeholder = "Username" required  autofocus autocomplete = "off"  /></td></tr>

<tr>
<td><center><b>Password: </td> </tr>
<td><center><input type = "Password" name = "Password" placeholder = "Password" required autofocus autocomplete = "off" /></td></tr>



<tr>
<td><center><b>Firstname: </td> </tr>
<td><center><input type = "varchar" name = "Firstname" placeholder = "Firtsname" required  autofocus autocomplete = "off"/></td></tr>


<tr>
<td><center><b>Lastname: </td> </tr>
<td><center><input type = "varchar" name = "Lastname" placeholder = "Lastname" required autofocus autocomplete = "off"/></td></tr>

<tr>
<td><center><b>Email: </td> </tr>
<td><center><input type = "varchar" name = "Email" placeholder = "Email" autofocus autocomplete = "off"/></td></tr>

<tr>
<td><center><b>Phone No: </td> </tr>
<td><center><input type = "varchar" name = "PhoneNo" placeholder = "PhoneNo" required autofocus autocomplete = "off" /></td></tr>

<tr>
<td><center><b>Department: </td> </tr>
<td><center><select name = "DepartmentCourse" id = "DepartmentCourse" required>
<option value ="" >Select Department  </option>
<option value ="SICT Department" > SICT Department </option>
<option value ="PLE Department" > PLE Department </option>
<option value ="ICE Department" > ICE Department </option>
<option value ="BMA Department" > BMA Department </option> </b>  </td> </tr>


<tr>
<td><center><b>Group Code: </td> </tr>
<td><center><input type = "varchar" name = "GroupCode" placeholder = "Enter Group Code" required /></td></tr>



<br> <br>
<tr> <td> </td></tr> <tr> <td> </td></tr> <tr> <td> </td></tr> <tr> <td> </td></tr>
<tr> <td> <center> <input type="submit" class="button" value="Submit">

	<input type="button" onClick="location = 'SearchRegistration.php'" value="Search & Delete">
    <input type="button" onClick="location = 'SearchEditRegistration.php'" value="Search & Edit"> </td> </tr>



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

