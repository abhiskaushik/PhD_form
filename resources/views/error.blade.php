<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
	 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/admin.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/common.css')}}">
	<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
</head>
<body>
	<nav class="teal darken-4">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Error</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" class="waves-effect">Homepage</a></li>
        <!-- <li><a href="#" class="waves-effect">Selected Candidates</a></li> -->
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">Homepage</a></li>
        <!-- <li><a href="#">Selected Candidates</a></li> -->
      </ul>
    </div>
  </nav>

  <div class="space-large"></div>
  <div class="container">
  	<div class="row">
      <h5></h5>
        <a class="btn btn-waves" href="../upload">Click here to go back</a>
  	</div>
  </div>
  
  
</body>
</html>