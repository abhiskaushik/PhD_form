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

<div class="space-large"></div>
  <div class="container">
  	<div class="row">

  	@for($i = 0; $i < sizeof($data); $i++)

  		<div class="col l5 s5 offset-s1 offset-l1">
        <div class="card">
          <div class=" waves-effect waves-block waves-light">  
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Candidate's Card</span>
            <div class="row">
              <div class="col l6 s6">
                <p>Registration Number:{!! sizeof($data) !!}</p>
              </div>
              <div class="col l6 s6">
                <p>Date of Submission:{!! $data[$i]->date !!}</p>
              </div>
            </div>
            <div class="row">
              <div class="col l6 s6">Name:{!! $data[$i]->name !!}</div>
              <div class="col l6 s6">Department:{!! $data[$i]->department !!}</div>
            </div>
            <div class="space-small center">
            </div>
            <div class="center">
              <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Click Here To view full form</a>
            </div>
          </div>
          
          </div>
        </div>
     

      <!-- modal goes here -->

      <!-- <div id="modal1" class="modal">
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
        <p><b>Undergraduate Class:</b> {!! $data[$i]['ug_class'] !!}</p>
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
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
      </div> -->
 
@endfor
  		</div>

  	</div>
  </div>
  <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
</body>
</html>