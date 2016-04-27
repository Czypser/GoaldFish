<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
<link href="{{ asset('css/Login.css') }}" rel="stylesheet" type="text/css" >
</head>
<body id="body-color">
<div id="Sign-In">
<fieldset>
<legend>REGISTER HERE</legend>
<form method="POST" action="{{ url('/register') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
Email <br><input type="email" name="email" size="40" value="{{ old('email') }}"><br>
First Name <br><input type="text" name="first_name" size="40" value="{{ old('first_name') }}"><br>
Last Name <br><input type="text" name="last_name" size="40" value="{{ old('last_name') }}"><br>
UserName <br><input type="text" name="username" size="40" value="{{ old('username') }}"><br>
Password <br><input type="password" name="password" size="40"><br>
Confirm Password <br><input type="password" size="40" name="password_confirmation">
<br>
<input id="button" type="submit" name="register" value="register">
<br>
</form>
</fieldset>
Remember your <a href="login">Log-in?</a>
</div>
</body>
</html> 