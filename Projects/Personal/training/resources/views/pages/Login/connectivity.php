<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'GoaldFish'); 
define('DB_USER','root'); 
define('DB_PASSWORD','root'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
/*$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
/* 
$ID = $_POST['user']; 
$Password = $_POST['pass']; 
*/ 
function SignIn($con) 
{ 
	session_start(); //starting the session for user profile page 
	if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
	{
		if (empty($_POST['pass']))
		{
			echo "Please enter a Password.";
		}	
		$query = mysqli_query($con, "SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
		$row = mysqli_fetch_array($query) or die(mysql_error());
		if(!empty($row['userName']) AND !empty($row['pass'])) 
		{
			$_SESSION['userName'] = $row['pass'];
			header("Location: http://192.168.33.10/nicejob.html");
			/* templating engine
			*/ 
		} 
		else 
		{ 
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
		} 
	}
	elseif(empty($_POST['pass']))
	{
		alert("Please enter a UserName and Password.");
	}
	else
	{
		echo "Please enter a UserName.";
	} 
} 
if(isset($_POST['submit'])) 
{ 
	SignIn($con); 
} 

?>