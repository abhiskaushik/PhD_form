<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    @for($i = 0; $i < sizeof($data); $i++)
        
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
                <p>Date of Submission:{!! $data[$i]->date !!}</p>
              </div>
            </div>
           
            <div class="space-small center">
            </div>
            <div class="center">
              <a class="waves-effect waves-light btn modal-trigger" href="#modal{!! $i !!}">Click Here To view full form</a>
            </div>
           <!--  {!! Form::open(array('action'=>array('AdminController@deleted' , $data[$i]->reg_number))) !!}

            {!! Form::submit('Reject Application', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
            {!! Form::close() !!} -->
          </div>
          
          </div>
        </div>
     
        

       <div id="modal{!! $i !!}" class="modal">
          <div class="modal-content">
          <h4>Candidate's Form</h4>
          <p><b>Registration Number:</b> {!! $data[$i]->reg_number !!}</p>
          <p><b>Date of Registration:</b> {!! $data[$i]->date !!}</p>
          <p><b>D.D Number:</b> {!! $data[$i]->dd_no !!}</p>
          <p><b>Date of Submission of D.D:</b> </p>
          <p><b>Amount(D.D):</b> {!! $data[$i]->amount !!}</p>
          <p><b>Drawn At(D.D):</b> {!! $data[$i]->drawn_at !!}</p>
          <p><b>Application Category:</b> {!! $data[$i]->appl_categ !!}</p>
          <p><b>Department:</b> {!! $data[$i]->department !!}</p>
          <p><b>Area of Research:</b> {!! $data[$i]->area_of_research !!}</p>
          <p><b>Name of Candidate:</b> {!! $data[$i]->name !!}</p>
          <p><b>Father's Name:</b> {!! $data[$i]->father_name !!}</p>
          <p><b>Date of Birth:</b> {!! $data[$i]->dob !!}</p>
          <p><b>Category:</b> {!! $data[$i]->category !!}</p>
          <p><b>Sex & Marital Status:</b> {!! $data[$i]->sex_marital_status !!}</p>
          <p><b>Physically Handicapped:</b> {!! $data[$i]->ph !!}</p>
          <p><b>Nationality:</b> {!! $data[$i]->nationality !!}</p>
          <p><b>Address for Communication:</b> {!! $data[$i]->addr_for_commn !!}</p>
          <p><b>Permanent Address:</b> {!! $data[$i]->permanent_addr !!}</p>
          <p><b>Undergraduate Degree:</b> {!! $data[$i]->ug_deg !!}</p>
          <p><b>Undergraduate Branch:</b> {!! $data[$i]->ug_branch !!}</p>
          <p><b>Undergraduate G.P.A:</b> {!! $data[$i]->ug_gpa !!}</p>
          <p><b>Undergraduate Class:</b> {!! $data[$i]->ug_class !!}</p>
          <p><b>Undergraduate Name of Institution:</b> {!! $data[$i]->ug_name_of_inst !!}</p>
          <p><b>Undergraduate Name of University:</b> {!! $data[$i]->ug_name_of_uni !!}</p>
          <p><b>Undergraduate Year of Passing:</b> {!! $data[$i]->ug_yop !!}</p>
          <p><b>Post-Graduate Degree:</b> {!! $data[$i]->ug_deg !!}</p>
          <p><b>Post-Graduate Branch:</b> {!! $data[$i]->ug_branch !!}</p>
          <p><b>Post-Graduate G.P.A:</b> {!! $data[$i]->ug_gpa !!}</p>
          <p><b>Post-Graduate Class:</b> {!! $data[$i]->ug_class !!}</p>
          <p><b>Post-Graduate Name of Institution:</b> {!! $data[$i]->ug_name_of_inst !!}</p>
          <p><b>Post-Graduate Name of University:</b> {!! $data[$i]->ug_name_of_uni !!}</p>
          <p><b>Post-Graduate Year of Passing:</b> {!! $data[$i]->ug_yop !!}</p>
          <p><b>Score:</b> {!! $data[$i]->score !!}</p>
          <p><b>Rank:</b> {!! $data[$i]->rank !!}</p>
          <p><b>Title of Project:</b> {!! $data[$i]->title_of_project !!}</p>
          <p><b>Details of Publication:</b> {!! $data[$i]->details_of_pub !!}</p>
          <p><b>Awards:</b> {!! $data[$i]->awards !!}</p>
          <p><b>Employer Details 1:</b> {!! $data[$i]->employer_details_1 !!}</p>
          <p><b>Employer Details 2:</b> {!! $data[$i]->employer_details_2 !!}</p>
          <p><b>Employer Details 3:</b> {!! $data[$i]->employer_details_3 !!}</p>
        </div>
      <div class="modal-footer">
        <a href="#!" id="ajax" class="btn modal-action modal-close waves-effect waves-green btn-flat">Discard</a>
      </div>
      </div>


      @endfor
    </div>
   </div>
  
<div class="space-large"></div>
<footer class="page-footer teal darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">National Institute of Technology</p>
                <p class="grey-text text-lighten-4">Tiruchirappalli - 620015</p>
                <p class="grey-text text-lighten-4">Tamil Nadu, INDIA</p>
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

