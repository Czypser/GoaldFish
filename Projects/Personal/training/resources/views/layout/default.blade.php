<!doctype html>
<html>
<head>
<!-- my head section goes here -->
<!-- my css and js goes here -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="container">
  <header class="main_header"> @include('layout.header') </header>
  <div class="sidebar"> @include('layout.sidebar') </div>
  <div class="contents"> @yield('content') </div>
  <footer> @include('layout.footer') </footer>
</div>
</body>
</html>