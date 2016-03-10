<!DOCTYPE HTML>
<html>
<head>
	<title>Upload Form Page</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/upload.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/common.css')}}">
	<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
</head>
<body>
	
	<nav class="teal darken-4">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Upload</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" class="waves-effect">Homepage</a></li>
        <li><a href="#" class="waves-effect">Login</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">Homepage</a></li>
        <li><a href="#">Selected Candidates</a></li>
      </ul>
    </div>
  </nav>

  	<div class="container">
  	<div class="space-medium"></div>
	     <div class="span7 offset1">
	        @if(Session::has('success'))
	          <div class="alert-box success">
	          <h2>{!! Session::get('success') !!}</h2>
	          </div>
	        @endif
	        <div class="col m1 offset-m1">
	        <div class="secure flow-text">Upload form</div>
	        {!! Form::open(array('url'=>'upload','method'=>'POST', 'files'=>true )) !!}
	         <div class="control-group">
	          <div class="controls">
	          	<div class="file-field input-field">
	          		<div class="btn teal darken-1 btn waves-effect waves-light">
	          			<span>File</span>
	          			{!! Form::file('image' , array('class'=>'')) !!}			
	          		</div>
	          		<div class="file-path-wrapper">
        				<input class="file-path validate" type="text">
      				</div>
	          	</div>
	          

		  <p class="errors">{!!$errors->first('image')!!}</p>
		@if(Session::has('error'))
		<p class="errors">{!! Session::get('error') !!}</p>
		@endif
	        </div>
	        </div>
	        <div id="success"> </div>
	      {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light')) !!}
	      {!! Form::close() !!}
	      </div>
	      </div>
	   </div>
	
</body>
</html>