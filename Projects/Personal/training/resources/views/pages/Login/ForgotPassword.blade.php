<!DOCTYPE HTML>
<html>
<head>
<title>Forgot Password</title>
<link href="{{ asset('css/Login.css') }}" rel="stylesheet" type="text/css" >
</head>
<body id="body-color">
<div id="Sign-In">
<fieldset>
<legend>FORGOT PASSWORD?</legend>
<form method="POST" action="connectivity.php">
Enter your Username and/or Email address <br><br>
UserName <br><input type="text" name="user" size="40"><br>
Email <br><input type="password" name="pass" size="40"><br>
<br>
<input id="button" type="submit" name="register" value="Get Password">
<br>
</form>
</fieldset>
Remember your password? <a href="login">Log-in</a>
</div>
</body>
</html> 