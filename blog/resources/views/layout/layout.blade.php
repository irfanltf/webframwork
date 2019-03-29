<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/blog/public/css/bootstrap.css">
	<link href="http://localhost/blog/public/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="http://localhost/blog/public/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="http://localhost/blog/public/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://localhost/blog/public/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  

  <!-- Custom styles for this template -->
  <link href="http://localhost/blog/public/css/freelancer.min.css" rel="stylesheet">
</head>
<body>
<header>
	@include('layout.header')
</header>
<ul>
	@section('sidebar')
		<li>HTML</li>
		<li>CSS</li>
		<li>JS</li>

	@show
</ul>


<div class="container">
	@yield('konten')
</div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="http://localhost/blog/public/js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="http://localhost/blog/public/js/freelancer.min.js"></script>
</body>
</html>