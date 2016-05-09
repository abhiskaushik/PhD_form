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
  <header style="height: 25vh;
	padding: 0px;
	margin: 0px;
	background-image: url('{{URL::asset('assets/images/header.png')}}');
	background-repeat: no-repeat;
	background-position: center;
	background-color: #004d40;
	background-size: contain;"></header>
  

  <nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="/home">PhD./M.S. Admissions</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/home">PhD./M.S. Admissions</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="space-medium"></div>

  <div class="space-large"></div>
  <div class="container main">
    <div class="row">

<!-- if condition goes here -->
    @if($details['phdorms']  == 'phd')
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
              <div class="col l6 s6">Department 1:{!! $details['department1'] !!}</div>
              <div class="col l6 s6">Department 2:{!! $details['department2'] !!}</div>
              <div class="col l6 s6">Department 3:{!! $details['department3'] !!}</div>
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

      <div id="modal1" class="modal">
      <div class="modal-content">
        <div class="">
          <h4>Candidate's Form</h4>
          <div class="row">
            <div class="col l6">
              <p><b>Registration Number:</b> {!! $details['reg_number'] !!}</p>      
            </div>
            <div class="col l6">
              <p><b>Date of Registration:</b> {!! $details['date'] !!}</p>      
            </div>
          </div>
          <div class="row">
            <h5>Application Details:</h5>
            <div class="col l6">
              <p><b>Application Category:</b> {!! $details['appl_categ'] !!}</p>
              <p><b>Department 2:</b> {!! $details['department2'] !!}</p>
            </div>
            <div class="col l6">
              <p><b>Department 1:</b> {!! $details['department1'] !!}</p>
        
        <p><b>Department 3:</b> {!! $details['department3'] !!}</p>
            </div>
          </div>
          <div class="row">
            <h5>Personal Details:</h5>
            <div class="col l6">
              <p><b>Email:</b> {!! $details['email'] !!}</p>
              <p><b>Name of Candidate:</b> {!! $details['name'] !!}</p>
              <p><b>Father's Name:</b> {!! $details['father_name'] !!}</p>
              <p><b>Category:</b> {!! $details['category'] !!}</p>
              <p><b>Marital Status: {!! $details['marital_status'] !!}</b></p>
              <p><b>Nationality:</b> {!! $details['nationality'] !!}</p>
              <p><b>Permanent Address:</b> {!! $details['permanent_addr'] !!}</p>
              <p><b>Landline Number:</b> {!! $details['landline'] !!}</p>
            </div>
            <div class="col l6">
               <p><b>Area of Research:</b> {!! $details['area_of_research'] !!}</p>
        
        <p><b>Email Id:</b> {!! $details['email'] !!}</p>
        
        <p><b>Date of Birth:</b> {!! $details['dob'] !!}</p>
        
        <p><b>Sex:</b> {!! $details['sex'] !!}</p>
        
        <p><b>Physically Handicapped:</b> {!! $details['ph'] !!}</p>
        
        <p><b>Address for Communication:</b> {!! $details['addr_for_commn'] !!}</p>
        
        <p><b>Mobile Number:</b> {!! $details['mobile'] !!}</p>
        
            </div>
          </div>
          <div class="row">
            <h5>Undergraduate Details:</h5>
            <div class="col l6">
              <p><b> Degree:</b> {!! $details['ug_deg'] !!}</p>
              <p><b> G.P.A:</b> {!! $details['ug_gpa'] !!}</p>
              <p><b> Name of Institution:</b> {!! $details['ug_name_of_inst'] !!}</p>
              <p><b> Year of Passing:</b> {!! $details['ug_yop'] !!}</p>
            </div>
            <div class="col l6">
              <p><b> Branch:</b> {!! $details['ug_branch'] !!}</p>
        
        <p><b> Class:</b> {!! $details['ug_class'] !!}</p>
        
        <p><b> Name of University:</b> {!! $details['ug_name_of_uni'] !!}</p>
        
            </div>
          </div>
          <div class="row">
            <h5>Post Graduate Details:</h5>
            <div class="col l6">
              <p><b> Degree:</b> {!! $details['pg_deg'] !!}</p>
              <p><b> G.P.A:</b> {!! $details['pg_gpa'] !!}</p>
              <p><b> Name of Institution:</b> {!! $details['pg_name_of_inst'] !!}</p>
              <p><b> Year of Passing:</b> {!! $details['pg_yop'] !!}</p>
            </div>
            <div class="col l6">
              <p><b> Branch:</b> {!! $details['pg_branch'] !!}</p>
              
              <p><b> Class:</b> {!! $details['pg_class'] !!}</p>
              
              <p><b> Name of University:</b> {!! $details['pg_name_of_uni'] !!}</p>
            </div>
          </div>
          <div class="row">
            <div class="col l12">
              <p><b>Exam:</b> {!! $details['exam'] !!}</p>
              <p><b>Score:</b> {!! $details['score'] !!}</p>
              <p><b>Rank:</b> {!! $details['rank'] !!}</p>
              <p><b>Validity:</b> {!! $details['validity'] !!}</p>
              <p><b>Discipline:</b> {!! $details['discipline'] !!}</p>              
            </div>

          </div>
          <div class="row">
            <h5>Project/Publication Details:</h5>
            <div class="col l6">
              <p><b>Title of Project:</b> {!! $details['title_of_project'] !!}</p>
              <p><b>Details of Publication 2:</b> {!! $details['details_of_pub2'] !!}</p>
              <p><b>Awards 1:</b> {!! $details['awards1'] !!}</p>
              <p><b>Awards 3:</b> {!! $details['awards3'] !!}</p>
            </div>
            <div class="col l6">
              <p><b>Details of Publication 1:</b> {!! $details['details_of_pub1'] !!}</p>
              
              <p><b>Details of Publication 3:</b> {!! $details['details_of_pub3'] !!}</p>
              
              <p><b>Awards 2:</b> {!! $details['awards2'] !!}</p>
            </div>
          </div>
          <div class="row">
            <div class="col l12">
            <p><b>Employer Details 1:</b> {!! $details['employer_details_1'] !!}</p>
            <p><b>Postition 1:</b> {!! $details['position1'] !!}</p>
              <div class="col l6"><p><b>From 1:</b> {!! $details['from1'] !!}</p></div>
              <div class="col l6"><p><b>To 1:</b> {!! $details['to1'] !!}</p></div>
            </div>
          </div>
          <div class="row">
            <div class="col l12">
            <p><b>Employer Details 2:</b> {!! $details['employer_details_2'] !!}</p>
            <p><b>Postition 2:</b> {!! $details['position2'] !!}</p>
              <div class="col l6"><p><b>From 2:</b> {!! $details['from2'] !!}</p></div>
              <div class="col l6"><p><b>To 2:</b> {!! $details['to2'] !!}</p></div>
            </div>
          </div>
          <div class="row">
            <div class="col l12">
            <p><b>Employer Details 3:</b> {!! $details['employer_details_3'] !!}</p>
            <p><b>Postition 3:</b> {!! $details['position3'] !!}</p>
              <div class="col l6"><p><b>From 3:</b> {!! $details['from3'] !!}</p></div>
              <div class="col l6"><p><b>To 3:</b> {!! $details['to3'] !!}</p></div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <a href="#!"  data-reg={!! $details['reg_number']!!} class="print btn modal-action modal-close waves-effect waves-green btn-flat">Print</a>
      </div>
      </div>
    </div>

    @else
    <!-- else condition -->
    <!-- ms modal -->
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
              <div class="col l6 s6">Department 1:{!! $details['department1'] !!}</div>
              <div class="col l6 s6">Department 2:{!! $details['department2'] !!}</div>
              <div class="col l6 s6">Department 3:{!! $details['department3'] !!}</div>
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

      <div id="modal1" class="modal">
      <div class="modal-content">

        <div class="">
          <h4>Candidate's Form</h4>
          <div class="row">
            <div class="col l6">
              <p><b>Registration Number:</b> {!! $details['reg_number'] !!}</p>      
            </div>
            <div class="col l6">
              <p><b>Date of Registration:</b> {!! $details['date'] !!}</p>      
            </div>
          </div>
          <div class="row">
            <h5>Application Details:</h5>
            <div class="col l6">
              <p><b>Application Category:</b> {!! $details['appl_categ'] !!}</p>
              <p><b>Department 2:</b> {!! $details['department2'] !!}</p>
            </div>
            <div class="col l6">
              <p><b>Department 1:</b> {!! $details['department1'] !!}</p>
        
        <p><b>Department 3:</b> {!! $details['department3'] !!}</p>
            </div>
          </div>
          <div class="row">
            <h5>Personal Details:</h5>
            <div class="col l6">
              <p><b>Email:</b> {!! $details['email'] !!}</p>
              <p><b>Name of Candidate:</b> {!! $details['name'] !!}</p>
              <p><b>Father's Name:</b> {!! $details['father_name'] !!}</p>
              <p><b>Category:</b> {!! $details['category'] !!}</p>
              <p><b>Marital Status: {!! $details['marital_status'] !!}</b></p>
              <p><b>Nationality:</b> {!! $details['nationality'] !!}</p>
              <p><b>Permanent Address:</b> {!! $details['permanent_addr'] !!}</p>
              <p><b>Landline Number:</b> {!! $details['landline'] !!}</p>
            </div>
            <div class="col l6">
               <p><b>Area of Research:</b> {!! $details['area_of_research'] !!}</p>
        
        <p><b>Email Id:</b> {!! $details['email'] !!}</p>
        
        <p><b>Date of Birth:</b> {!! $details['dob'] !!}</p>
        
        <p><b>Sex:</b> {!! $details['sex'] !!}</p>
        
        <p><b>Physically Handicapped:</b> {!! $details['ph'] !!}</p>
        
        <p><b>Address for Communication:</b> {!! $details['addr_for_commn'] !!}</p>
        
        <p><b>Mobile Number:</b> {!! $details['mobile'] !!}</p>
        
            </div>
          </div>
          <div class="row">
            <h5>Undergraduate Details:</h5>
            <div class="col l6">
              <p><b> Degree:</b> {!! $details['ug_deg'] !!}</p>
              <p><b> G.P.A:</b> {!! $details['ug_gpa'] !!}</p>
              <p><b> Name of Institution:</b> {!! $details['ug_name_of_inst'] !!}</p>
              <p><b> Year of Passing:</b> {!! $details['ug_yop'] !!}</p>
            </div>
            <div class="col l6">
              <p><b> Branch:</b> {!! $details['ug_branch'] !!}</p>
        
        <p><b> Class:</b> {!! $details['ug_class'] !!}</p>
        
        <p><b> Name of University:</b> {!! $details['ug_name_of_uni'] !!}</p>
        
            </div>
          </div>
          <div class="row">
            <div class="col l4"><p><b>Semester 1:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa1'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max1'] !!}  </p></div>

            <div class="col l4"><p><b>Semester 2:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa2'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max2'] !!}  </p></div>
            <div class="col l4"><p><b>Semester 3:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa3'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max3'] !!}  </p></div>
            <div class="col l4"><p><b>Semester 4:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa4'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max4'] !!}  </p></div>
            <div class="col l4"><p><b>Semester 5:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa5'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max5'] !!}  </p></div>
            <div class="col l4"><p><b>Semester 6:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa6'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max6'] !!}  </p></div>
            <div class="col l4"><p><b>Semester 7:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa7'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max7'] !!}  </p></div>
            <div class="col l4"><p><b>Semester 8:</b></p></div>
            <div class="col l4"><p><b>C.G.P.A Scored:</b> {!! $details['gpa8'] !!}  </p></div>
            <div class="col l4"><p><b>Total C.G.P.A:</b> {!! $details['max8'] !!}  </p></div>
          </div>
          <div class="row">
            <div class="col l12">
            <p><b>Employer Details 1:</b> {!! $details['employer_details_1'] !!}</p>
            <p><b>Postition 1:</b> {!! $details['position1'] !!}</p>
              <div class="col l6"><p><b>From 1:</b> {!! $details['from1'] !!}</p></div>
              <div class="col l6"><p><b>To 1:</b> {!! $details['to1'] !!}</p></div>
            </div>
          </div>
          <div class="row">
            <div class="col l12">
            <p><b>Employer Details 2:</b> {!! $details['employer_details_2'] !!}</p>
            <p><b>Postition 2:</b> {!! $details['position2'] !!}</p>
              <div class="col l6"><p><b>From 2:</b> {!! $details['from2'] !!}</p></div>
              <div class="col l6"><p><b>To 2:</b> {!! $details['to2'] !!}</p></div>
            </div>
          </div>
          <div class="row">
            <div class="col l12">
            <p><b>Employer Details 3:</b> {!! $details['employer_details_3'] !!}</p>
            <p><b>Postition 3:</b> {!! $details['position3'] !!}</p>
              <div class="col l6"><p><b>From 3:</b> {!! $details['from3'] !!}</p></div>
              <div class="col l6"><p><b>To 3:</b> {!! $details['to3'] !!}</p></div>
            </div>
          </div>
        
          </div>

        
      </div>
      <div class="modal-footer">
        <a href="#!"  data-reg={!! $details['reg_number']!!} class="print btn modal-action modal-close waves-effect waves-green btn-flat">Print</a>
      </div>
      </div>

      @endif
  </div>
</div>
  
<footer class="page-footer teal darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contact Us</h5>
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