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
	<script src="{{URL::asset('assets/js/code.js')}}"></script>
</head>
<body>
	
	<header>	
	</header>
	
	<nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="/phd">Phd Admission's</a></li>
        <li><a href="/msc">M.Sc Admission's</a></li>
        <li><a href="/adminlogin">Admin</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/phd">Phd Admission's</a></li>
        <li><a href="/msc">M.Sc Admission's</a></li>
        <li><a href="/adminlogin">Admin</a></li>
      </ul>
    </div>
  </nav>

  <div class="space-medium"></div>

  	<div class="container">
  	<div class="space-medium"></div>
	     <div class="span7 offset1">
	        @if(Session::has('success'))
	          <div class="alert-box success">
	          <h4>{!! Session::get('success') !!}</h4>
	          </div>
	        @endif
	        <div class="col m1 offset-m1">
	        <div class="secure flow-text">Application</div>
	        {!! Form::open(array('url'=>'upload','method'=>'POST', 'files'=>true )) !!}
	         <div class="control-group">
	          <div class="controls">
	          	<div class="row">
			        <div class="input-field col s6">
			          <input placeholder="Placeholder" id="reg_no" type="text">
			          <label for="first_name">Registration Number</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="full_name" type="text" class="validate" name="full_name">
			          <label for="full_name">Full Name</label>
			        </div>
			     </div>	
			     <div class="row">
			     	<div class="col s12">			     		
							<a class="waves-effect waves-light btn" href="robots.txt" download="form.txt">Download Form Here</a>
			     	</div>
			     </div>	
			     <h5>Upload Form</h5>
	          	<div class="file-field input-field">
	          		<div class="btn teal darken-1 btn waves-effect waves-light">
	          			<span>File</span>
	          			{!! Form::file('doc' , array('class'=>'')) !!}			
	          		</div>
	          		<div class="file-path-wrapper">
        				<input class="file-path validate" type="text">
      				</div>
	          	</div>
	          	
<!-- 
		  <p class="errors">{!!$errors->first('doc')!!}</p>
		@if(Session::has('error'))
		<p class="errors">{!! Session::get('error') !!}</p>
		@endif -->
	        </div>
	        </div>
	        <div id="success"> </div>
	      {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	      {!! Form::close() !!}
	      </div>
	      </div>
	   </div>
	
</body>
</html>