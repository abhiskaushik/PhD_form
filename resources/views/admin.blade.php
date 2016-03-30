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
      <a href="#!" class="brand-logo">Admin Portal</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" class="waves-effect">Homepage</a></li>
        <li><a href="#" class="waves-effect">Selected Candidates</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">Homepage</a></li>
        <li><a href="#">Selected Candidates</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
  	<div class="space-medium"> </div>
  	<div class="row">
  	@for($i = 0; $i < 2; $i++)

  		<div class="col l4 s6 ">
	  		<div class="card">
			    <div class=" waves-effect waves-block waves-light">
			      
			    </div>
			    <div class="card-content">
			      <span class="card-title activator grey-text text-darken-4">Candidate's Card<i class="material-icons right">more_vert</i></span>
			      <p>Name:</p>
			     <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Modal</a>

 	    </div>
			    <div class="card-reveal">
			      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
			      <p>Basic details of Candidate goes here..</p>
			      
			      <div class="space-small"></div>
			     	 <div class="fixed-action-btn horizontal" style="bottom: 45px;right: 24px;">
					    <a class="btn-floating btn-large red">
					    	  <i class="large material-icons">mode_edit</i>
					    </a>
					    <ul>
					      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
					      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
					      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
					    </ul>
  					</div>
			    </div>
	  		</div>
  		</div>

  		 <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>
		
@endfor
  		

  	</div>
  </div>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$(".button-collapse").sideNav();
  	});
  </script>
  <script type="text/javascript">
  	 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
</body>
</html>