<!DOCTYPE html>
<html>
<head>
	<t<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Success Page</title>
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
  <!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/print.js')}}"></script>
</head>
<body>
	<header> 
  </header>
  
  <nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="/form">Phd/M.S. Admission's</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/form">Phd/M.S. Admission's</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="space-medium"></div>

  <div class="space-large"></div>
  <div class="container">
    <div class="row">
    @for($i = 0; $i < 1; $i++)
      <div class="col l10 offset-l1 s10 offset-s1 ">
        <div class="card">
          <div class=" waves-effect waves-block waves-light">  
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Candidate's Card</span>
            <div class="row">
              <div class="col l6 s6">
                <p>Registration Number:{!! $details['reg_number'] !!}</p>
              </div>
              <div class="col l6 s6">
                <p>Date of Submission:{!! $details['date'] !!}</p>
              </div>
            </div>
            <div class="row">
              <div class="col l6 s6">Name:{!! $details['name']!!}</div>
              <div class="col l6 s6">Department:{!! $details['department1'] !!}</div>
              <div class="col l6 s6">Department:{!! $details['department2'] !!}</div>
              <div class="col l6 s6">Department:{!! $details['department3'] !!}</div>
            </div>
            <div class="space-small center">
            </div>
            <div class="center">
              <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Click Here To view full form</a>
            </div>
          </div>
          
          </div>
        </div>
      </div>

      <!-- modal goes here -->

      <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Candidate's Form</h4>
        <p><b>Registration Number:</b> {!! $details['reg_number'] !!}</p>
        <p><b>Date of Registration:</b> {!! $details['date'] !!}</p>
        <p><b>D.D Number:</b> {!! $details['dd_no'] !!}</p>
        <p><b>Date of Submission of D.D:</b> {!! $details['date_of_sub'] !!}</p>
        <p><b>Amount(D.D):</b> {!! $details['amount'] !!}</p>
        <p><b>Drawn At(D.D):</b> {!! $details['drawn_at'] !!}</p>
        <p><b>Application Category:</b> {!! $details['appl_categ'] !!}</p>
        <p><b>Department 1:</b> {!! $details['department1'] !!}</p>
        <p><b>Department 2:</b> {!! $details['department2'] !!}</p>
        <p><b>Department 3:</b> {!! $details['department3'] !!}</p>
        <p><b>Email:</b> {!! $details['email'] !!}</p>
        <p><b>Area of Research:</b> {!! $details['area_of_research'] !!}</p>
        <p><b>Name of Candidate:</b> {!! $details['name'] !!}</p>
        <p><b>Father's Name:</b> {!! $details['father_name'] !!}</p>
        <p><b>Date of Birth:</b> {!! $details['dob'] !!}</p>
        <p><b>Category:</b> {!! $details['category'] !!}</p>
        <p><b>Sex:</b> {!! $details['sex'] !!}</p>
        <p><b>Marital Status: {!! $details['marital_status'] !!}</b></p>
        <p><b>Physically Handicapped:</b> {!! $details['ph'] !!}</p>
        <p><b>Nationality:</b> {!! $details['nationality'] !!}</p>
        <p><b>Address for Communication:</b> {!! $details['addr_for_commn'] !!}</p>
        <p><b>Permanent Address:</b> {!! $details['permanent_addr'] !!}</p>

        <p><b>Undergraduate Degree:</b> {!! $details['ug_deg'] !!}</p>
        <p><b>Undergraduate Branch:</b> {!! $details['ug_branch'] !!}</p>
        <p><b>Undergraduate G.P.A:</b> {!! $details['ug_gpa'] !!}</p>
        <p><b>Undergraduate Class:</b> {!! $details['ug_class'] !!}</p>
        <p><b>Undergraduate Name of Institution:</b> {!! $details['ug_name_of_inst'] !!}</p>
        <p><b>Undergraduate Name of University:</b> {!! $details['ug_name_of_uni'] !!}</p>
        <p><b>Undergraduate Year of Passing:</b> {!! $details['ug_yop'] !!}</p>
        <p><b>Post-Graduate Degree:</b> {!! $details['ug_deg'] !!}</p>
        <p><b>Post-Graduate Branch:</b> {!! $details['ug_branch'] !!}</p>
        <p><b>Post-Graduate G.P.A:</b> {!! $details['ug_gpa'] !!}</p>
        <p><b>Post-Graduate Class:</b> {!! $details['ug_class'] !!}</p>
        <p><b>Post-Graduate Name of Institution:</b> {!! $details['ug_name_of_inst'] !!}</p>
        <p><b>Post-Graduate Name of University:</b> {!! $details['ug_name_of_uni'] !!}</p>
        <p><b>Post-Graduate Year of Passing:</b> {!! $details['ug_yop'] !!}</p>
        <p><b>Score:</b> {!! $details['score'] !!}</p>
        <p><b>Rank:</b> {!! $details['rank'] !!}</p>
        <p><b>Title of Project:</b> {!! $details['title_of_project'] !!}</p>
        <p><b>Details of Publication:</b> {!! $details['details_of_pub'] !!}</p>
        <p><b>Awards:</b> {!! $details['awards'] !!}</p>
        <p><b>Employer Details 1:</b> {!! $details['employer_details_1'] !!}</p>
        <p><b>Employer Details 2:</b> {!! $details['employer_details_2'] !!}</p>
        <p><b>Employer Details 3:</b> {!! $details['employer_details_3'] !!}</p>
      </div>
      <div class="modal-footer">
        <a href="#!"  data-reg={!! $details['reg_number']!!} class="print btn modal-action modal-close waves-effect waves-green btn-flat">Print</a>
      </div>
      </div>

      @endfor
    </div>
  
  
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
            
            <a class="grey-text text-lighten-4" href="#!">Made with &hearts; by Delta Force</a>
            </div>
          </div>
        </footer>
            

  <script type="text/javascript">
      $(document).ready(function(){
        $(".button-collapse").sideNav();
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>

</body>
</html>