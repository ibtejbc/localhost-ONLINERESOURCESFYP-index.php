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
<form action = "InsertResources.php" method = "post"  enctype="multipart/form-data"> 
<table width="100%" border="0" align="center">




<tr>

<td><center><b>Room ID:  </td> </tr>
<tr>
<td><center><input type = "varchar" name = "RoomID" placeholder = "Eg.R1" required autofocus autocomplete = "off" /></td></tr>


<tr>
<td><center><b>Room: </td> </tr>
<td><center><input type = "varchar" name = "Room" required  autofocus autocomplete = "off" /></td></tr>

<tr>
<td><center><b>Department: </td> </tr>
<td><center><select name = "Department" id = "Department" required  autofocus autocomplete = "off">
<option value ="" > </option>

<option value ="SICT Department" > SICT Department </option>
<option value ="BMA Department" > BMA Department </option>
<option value ="PLE Department" > PLE Department </option>
<option value ="BSE Department" > BSE Department </option>
<option value ="ICE Department" > ICE Department </option>
<option value ="Others" >Others </option></b> </td> </tr>


<tr>
<td><center><b>Level Floor: </td> </tr>
<td><center><select name = "LevelFloor" id = "LevelFloor" required  autofocus autocomplete = "off">
<option value ="" > </option>

<option value ="None" > None </option>
<option value ="Ground Floor" > Ground </option>
<option value ="1 Floor" > 1 </option>
<option value ="2 Floor" > 2 </option>
<option value ="3 Floor" >3</option>
<option value ="4 Floor" >4</option></b> </td> </tr>




<tr>
<td><center><b>Group Code: </td> </tr>
<td><center><input type = "varchar" name = "GroupCode"  autofocus autocomplete = "off"  /></td></tr>


<tr>
<td><center><b>Course: </td> </tr>
<td><center><select name = "Course" id = "Course"  autofocus autocomplete = "off">
<option value ="-" >Select Course  </option>
<option value ="HnTec Information Technology" >HnTec Information Technology</option>
<option value ="HnTec Computer Networking" > HnTec Computer Networking</option>
<option value ="HnTec Building Services Engineering" >HnTec Building Services Engineering</option>
<option value ="Ntec Deck Rating" >Ntec Deck Rating</option>
<option value ="HnTec Instrumental Control Engineering" > HnTec Instrumetal Control Engineering</option></b> </td> </tr>

<tr>
<td><center><b>Staff In Charge: </td> </tr>
<td><center><input type = "varchar" name = "StaffinCharge" autofocus autocomplete = "off" /></td></tr>






<br> <br>
<tr> <td> </td></tr> <tr> <td> </td></tr> <tr> <td> </td></tr> <tr> <td> </td></tr>
<tr> <td> <center> <input type="submit" class="button" value="Submit">

	<input type="button" onClick="location = 'SearchResources.php'" value="Search & Delete">
    <input type="button" onClick="location = 'SearchEditResources.php'" value="Search & Edit"> </td> </tr>
	
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

