<?php
mysql_connect("localhost", "root", "mysql");
mysql_select_db("Online");
?>

<center>

<img src = "ibte.png" alt = "IBTE Logo" width = "200" height = "100"/> 
<h2> IBTE JEFRI BOLKIAH CAMPUS RESOURCES ONLINE BOOKING </h1>
<h2> STAFF LOGIN </h2>

<hr style="height:5px;border:none;color:#333;background-color:#333;" />	

<style type="text/css">
body {
	background-image: url(BackgroundAdmin.jpg);
}
</style>
<body onload = "noBack();"
	onpagehow "if (event.persisted) noBack();" onunload = "">
	
	<script type = "text/javascript">
	window.history.forward();
	function noBack() { window.history.forward();}
	</script>
 <br>

<style type="text/css">
.a {
	font-family: "Default Font;
}
</style>
<body class="a"> <br><br><br>
<img src="staff1.png" width="128" height="128" alt="">
 <br>
 <br>
<?php
if(isset($_POST['submit'])){
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	
	$result = mysql_query("SELECT * FROM Staff WHERE Username = BINARY '$Username' AND Password = BINARY '$Password'");
	$num = mysql_num_rows($result);
	if($num == 0){
	echo "Please Enter Correct Username and Password, Go <a href= 'StaffLogin.php'>Back</a>.";
	}else{
	session_start();
	//echo "Login Successful";
	$_SESSION['Username'] = $Username;
	header("Location: Staffpage.php");
	}

}else{
?>
<form action = 'StaffLogin.php' method ='post'>
	<b>Username: <input type = 'text' name = 'Username' placeholder = "Enter Your Username" autofocus autocomplete = "off"/><br>
	<br><b>Password: <input type = 'password' name='Password'placeholder = "Enter Your Password"/></br><br>
	<input type = 'submit' name = 'submit' value ='Login'/></br><br>
</form>

</center>

<?php
}
?>

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
</style>
</body>