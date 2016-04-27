<!DOCTYPE HTML>
<html>
<head>
<title>Sign-In</title>
<link href="{{ asset('css/Login.css') }}" rel="stylesheet" type="text/css" >
</head>
<body id="body-color">
<div id="Sign-In">
<fieldset>
<legend>LOG-IN HERE</legend>
<form method="POST" action="connectivity.php">
UserName <br><input type="text" name="user" size="40"><br>
Password <br><input type="password" name="pass" size="40"><br>
<br>
<input id="button" type="submit" name="submit" value="Log-in">
<br>
</form>
</fieldset>
<a href="register">Register</a> here if you are a new user.
<br>
<a href="forgotpassword">Forgot Password?</a> we can help!
</div>
</body>
</html>