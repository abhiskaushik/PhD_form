<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Page</title>
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
  <!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/ajaxcall.js')}}"></script>
  
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
    <div class="row">
    @for($i = 0; $i < sizeof($data['candidates']) && !$data['candidates'][$i]['deleted']; $i++)
        
     <div class="col l5 offset-l1 s5 offset-s1 ">
        <div class="card">
          <div class=" waves-effect waves-block waves-light">  
          </div>
          <div class="card-content">

            <span class="card-title activator grey-text text-darken-4">Candidate's Card</span>
            <div class="row">
              <div class="col l12 s12">
                <p>Registration Number:{!! sizeof($data) !!}</p>
              </div>
              <div class="col l12 s12">
                <!-- <p>Date of Submission:</p> -->
              </div>
            </div>
           
            <div class="space-small center">
            </div>
            <div class="center">
              <a class="waves-effect waves-light btn modal-trigger" href="#modal{!! $i !!}">Click Here To view full form</a>
            </div>
           <!--  {!! Form::open(array('action'=>array('AdminController@deleted' , ))) !!}

            {!! Form::submit('Reject Application', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
            {!! Form::close() !!} -->
          </div>
          
          </div>
        </div>
     
        

       <div id="modal{!! $i !!}" class="modal">
          <div class="modal-content">
          <h4>Candidate's Form</h4>
          
        </div>
      <div class="modal-footer">
        <a href="#!" data-reg={!! $data['candidates'][$i]['registrationNumber']!!} class="ajax btn modal-action modal-close waves-effect waves-green btn-flat">Discard</a>
        <a href="#!" class="btn modal-action modal-close waves-effect waves-green btn-flat">Print</a>
      </div>
      </div>


      @endfor
    </div>
   </div>
  
<div $class="space-large"></div>
<footer $class="page-footer teal darken-4">
          <div $class="container">
            <div $class="row">
              <div $class="col l6 s12">
                <h5 $class="white-text">Footer Content</h5>
                <p $class="grey-text text-lighten-4">National Institute of Technology</p>
                <p $class="grey-text text-lighten-4">Tiruchirappalli - 620015</p>
                <p $class="grey-text text-lighten-4">Tamil Nadu, INDIA</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">QuickLinks</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.nitt.edu">Institute Website</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/home/academics/departments/">Departments</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/home/admissions/">Admissions</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright dark">
            <div class="container center">
            
            <a class="grey-text text-lighten-4" href="#!">Made with * by Delta Force</a>
            </div>
          </div>
        </footer>
            

  <script type="text/javascript">
  $(document ).ready(function(){
    $(".button-collapse").sideNav();
  })
  </script>    

  <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>

</body>
</html>

