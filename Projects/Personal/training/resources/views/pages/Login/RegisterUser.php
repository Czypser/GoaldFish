<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'GoaldFish'); 
define('DB_USER','root'); 
define('DB_PASSWORD','root'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
mysqli_select_db($con, DB_NAME); 

if (!$con)
{
	die('Could Not Connect: ' . mysql_error());
}

if (!empty($_POST['FirstName']) and !empty($_POST['LastName']) and !empty($_POST['UserName']) and !empty($_POST['pass']) and !empty($_POST['email']))
{
	$query=mysqli_query($con, "INSERT INTO UserName (userName, pass, email, FirstName, LastName) VALUES ('$_POST[UserName]', '$_POST[pass]', '$_POST[email]', '$_POST[FirstName]', '$_POST[LastName]')") or die('Error: ' . mysqli_error($con));
}

else
{
	die("Please fill in all fields");
}

echo "Account has successfully been created. Thank you " . $_POST['FirstName'] . ".";
echo "<br /> Your UserName and Password are <br /> UserName: " . $_POST['UserName'] . "."; 
echo "<br / >Password: " . $_POST['pass'] . ".";
echo "<br /><a href=Login_Page.html>Login</a>";