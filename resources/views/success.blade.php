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
      <a href="#!" class="brand-logo">Success</a>
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
              <div class="col l6 s6">Department:{!! $details['department'] !!}</div>
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
        <p><b>Department:</b> {!! $details['department'] !!}</p>
        <p><b>Area of Research:</b> {!! $details['area_of_research'] !!}</p>
        <p><b>Name of Candidate:</b> {!! $details['name'] !!}</p>
        <p><b>Father's Name:</b> {!! $details['father_name'] !!}</p>
        <p><b>Date of Birth:</b> {!! $details['dob'] !!}</p>
        <p><b>Category:</b> {!! $details['category'] !!}</p>
        <p><b>Sex & Marital Status:</b> {!! $details['sex_marital_status'] !!}</p>
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
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
      </div>

      @endfor
    </div>
  
  
  <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>

</body>
</html>