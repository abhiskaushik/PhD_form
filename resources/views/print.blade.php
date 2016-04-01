<!DOCTYPE html>
<html>
<head>
	<t<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Success Page</title>
  <link rel="stylesheet" href="{{base_path('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{base_path('public/assets/css/materialize.min.css')}}">
  <!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> -->
  <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

  <script src="{{base_path('public/assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{base_path('public/assets/js/materialize.min.js')}}"></script> 
</head>
<body>
	
  <div class="container-fluid">
    <div class="row">
      <div class="col l2" style="background-color: black;">
        <img src="{{base_path('public/assets/images/header.png')}}">
      </div>
      <div class="col l10">
        <div class="space-small"></div>
        <h4>APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2015 – 2016)</h4>
      </div>
    </div>
  </div>
  
  
  

  <div class="space-medium"></div>

  <div class="space-large"></div>
  <div class="container">
    <div class="row">
      <!-- stuff -->
      <div class="row">
        <div class="col s12">
          <div class="row">
          <div class="col l8 s12">
            
              <h5><b>Registration Number:</b>{!! $candidates['registrationNumber'] !!}</h5>
            
            
          </div>  
          <div class="col l4 s12">
            
          </div>
          </div>    
        </div>
      </div>

      
  </div>
  


  <script type="text/javascript">
      $(document).ready(function(){
        $(".button-collapse").sideNav();
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>

</body>
</html>
