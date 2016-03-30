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
      <a href="#!" class="brand-logo">Admin</a>
      
    </div>
  </nav>

  <div class="space-large"></div>
  <div class="container">
  	<div class="row">
      {!! Form::open(array('url'=>'admin','method'=>'POST')) !!}
        <div class="secure flow-text center">Login</div>

        <div class="input-field col s8 offset-s2">
          <input $placeholder="Enter Username" id="username" name="username" type="text" class="validate">
          <label for="first_name">Username</label>
        </div>
        <div class="input-field col s8 offset-s2">
          <input $placeholder="Enter Password" $id="password" name="password" type="password" class="validate">
          <label for="first_name">Password</label>

        </div>
        <div class="center col s8 offset-s2">
          {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
        </div>

        
        {!! Form::close() !!}
  	</div>
  </div>
  
  
</body>
</html>