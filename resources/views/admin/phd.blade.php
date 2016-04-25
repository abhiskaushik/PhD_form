<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
  <title>Admissions NITT | Admin Page</title>
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
  <!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/admin.js')}}"></script>
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
        <li><a href="/phd">PhdAdmissions</a></li>
        <li><a href="/ms">M.S. Admissions</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/phd">PhdAdmissions</a></li>
        <li><a href="/ms">M.S. Admissions</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </nav>

  <div class="search">
        <input type="text" id="search" placeholder="search" />
  </div>
  <div class="space-large"></div>
  <div class="container">
    <div class="candidates row">
     @for($i = 0; $i < sizeof($data['candidates']); $i++)
        @if(!$data['candidates'][$i]->deleted)
        <div class="{!! $data['candidates'][$i]->applNo !!} col l5 offset-l1  " } data-reg = "{!! $data['candidates'][$i]->registrationNumber !!}">
        @if($data['candidates'][$i]->accepted)
        <div class="card center border">
        @else
        <div class="card center">
        @endif
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Candidate's Card</span>
            <div class="row">
              
                <p>Registration Number:  {!! $data['candidates'][$i]->registrationNumber !!}</p>
              
            </div>
           
            <div class="space-small">
            </div>
            <div class="center">
              <a class="waves-effect waves-light btn modal-trigger" href="#modal{!! $i !!}">Click Here To view full form</a>
            </div>
          </div>
          </div>

          <div id="modal{!! $i !!}" class="modal l8">
          <div class="modal-content">
          <h4>Candidate's Form</h4>
          
          <p><b>Registration Number:</b> {!! $data['candidates'][$i]->registrationNumber !!}</p>
          <p><b>Date of Registration:</b> {!! $data['candidates'][$i]->dateOfReg !!}
          </p>
         
          <p><b>Application Category:</b> {!! $data['candidates'][$i]->applicationCategory !!}</p>
          <p><b>Department:</b> {!! $data['candidates'][$i]->dept !!}</p>
          <p><b>Email Id:</b> {!! $data['candidates'][$i]->email !!}</p>
          <p><b>Area of Research:</b> {!! $data['candidates'][$i]->areaOfResearch !!}</p>
          <p><b>Name of Candidate:</b> {!! $data['candidates'][$i]->
          name !!}</p>
          <p><b>Email Id:</b> {!! $data['candidates'][$i]->email !!}</p>
          <p><b>Father's Name:</b> {!! $data['candidates'][$i]->fatherName !!}</p>
          <p><b>Date of Birth:</b> {!! $data['candidates'][$i]->dob !!}</p>
          <p><b>Category:</b> {!! $data['candidates'][$i]->category !!}</p>
          <p><b>Sex :</b> {!! $data['candidates'][$i]->sex !!}</p>
          <p><b>Marital Status: </b>{!! $data['candidates'][$i]->maritalStatus !!}</p>
          <p><b>Physically Handicapped:</b> {!! $data['candidates'][$i]->PH !!}</p><!-- wtf -->
          <p><b>Nationality:</b> {!! $data['candidates'][$i]->nationality !!}</p>
          <p><b>Address for Communication:</b> {!! $data['candidates'][$i]->addrforcomm !!}</p>
          <p><b>Permanent Address:</b> {!! $data['candidates'][$i]->permanentaddr !!}</p>
          <p><b>Mobile Number:</b> {!! $data['candidates'][$i]->mobile !!}</p>
          <p><b>Landline Number:</b> {!! $data['candidates'][$i]->landline !!}</p>

          <p><b>Undergraduate Degree:</b> {!! $data['ug'][$i]->degreeName !!}</p>
          <p><b>Undergraduate Branch:</b> {!! $data['ug'][$i]->branch !!}</p>
          <p><b>Undergraduate G.P.A:</b> {!! $data['ug'][$i]->gpa !!}</p>
          <p><b>Undergraduate Class:</b> {!! $data['ug'][$i]->class !!}</p>
          <p><b>Undergraduate Name of Institution:</b> {!! $data['ug'][$i]->institutionName !!}</p>
          <p><b>Undergraduate Name of University:</b> {!! $data['ug'][$i]->universityName !!}</p>
          <p><b>Undergraduate Year of Passing:</b> {!! $data['ug'][$i]->yop !!}</p>

          <p><b>Post-graduate Degree:</b> {!! $data['pg'][$i]->degreeName !!}</p>
          <p><b>Post-graduate Branch:</b> {!! $data['pg'][$i]->branch !!}</p>
          <p><b>Post-graduate G.P.A:</b> {!! $data['pg'][$i]->gpa !!}</p>
          <p><b>Post-graduate Class:</b> {!! $data['pg'][$i]->class !!}</p>
          <p><b>Post-graduate Name of Institution:</b> {!! $data['pg'][$i]->institutionName !!}</p>
          <p><b>Post-graduate Name of University:</b> {!! $data['pg'][$i]->universityName !!}</p>
          <p><b>Post-graduate Year of Passing:</b> {!! $data['pg'][$i]->yop !!}</p>

          <p><b>Exam Name:</b> {!! $data['others'][$i]->exam !!}</p>
          <p><b>Discipline:</b> {!! $data['others'][$i]->discipline !!}</p>
          <p><b>Score:</b> {!! $data['others'][$i]->score !!}</p>
          <p><b>Rank:</b> {!! $data['others'][$i]->rank !!}</p>
          <p><b>Title of Project:</b> {!! $data['others'][$i]->pgproject !!}</p>
          <p><b>Details of Publication 1:</b> {!! $data['others'][$i]->publications1 !!}</p>
          <p><b>Details of Publication 2:</b> {!! $data['others'][$i]->publications2 !!}</p>
          <p><b>Details of Publication 3:</b> {!! $data['others'][$i]->publications3 !!}</p>
          <p><b>Awards1:</b> {!! $data['others'][$i]->awards1 !!}</p>
          <p><b>Awards2:</b> {!! $data['others'][$i]->awards2 !!}</p>
          <p><b>Awards3:</b> {!! $data['others'][$i]->awards3 !!}</p>

          <p><b>Employer Details 1:</b> {!! $data['pro'][$i]->proexp1 !!}</p>
          <p><b>Position at Work 1:</b>{!! $data['pro'][$i]->position1 !!}</p>
          <p><b>From 1:</b>{!! $data['pro'][$i]->from1 !!}</p>
          <p><b>To 1:</b>{!! $data['pro'][$i]->to1 !!}</p>
          <p><b>Employer Details 2:</b> {!! $data['pro'][$i]->proexp2 !!}</p>
          <p><b>Position at Work 1:</b>{!! $data['pro'][$i]->position2 !!}</p>
          <p><b>From 1:</b>{!! $data['pro'][$i]->from2 !!}</p>
          <p><b>To 1:</b>{!! $data['pro'][$i]->to2 !!}</p>
          <p><b>Employer Details 3:</b> {!! $data['pro'][$i]->proexp3 !!}</p>
          <p><b>Position at Work 1:</b>{!! $data['pro'][$i]->position3 !!}</p>
          <p><b>From 1:</b>{!! $data['pro'][$i]->from3 !!}</p>
          <p><b>To 1:</b>{!! $data['pro'][$i]->to3 !!}</p>
          
          <p><b>Submission Date:</b> {!! $data['others'][$i]->subdate !!}</p>
        </div>
      <div class="modal-footer center">
        <div class="col s12">
          <a href="#!" data-reg={!! $data['candidates'][$i]->applNo!!} class="discard1 btn modal-action modal-close waves-effect waves-green btn-flat">Discard</a>
        <a href="#!"  data-reg={!! $data['candidates'][$i]->registrationNumber!!} class="print btn modal-action modal-close waves-effect waves-green btn-flat">Print</a>
        </div>
        <div class="col s12">
        <a href="#!" data-reg={!! $data['candidates'][$i]->registrationNumber!!} class="accept btn modal-action modal-close waves-effect waves-green btn-flat">Accept</a>
        <a href="#!" data-reg={!! $data['candidates'][$i]->registrationNumber!!} class="admit btn modal-action modal-close waves-effect waves-green btn-flat">Admit</a>
        </div>
      </div>
      </div>
        
    <div class="modal" id="discard">
      <div class="modal-content">
        <p class="large">
        Enter Message Here:-
        </p>
        <textarea required id="discard-msg" class="materialize-textarea" name="discard-msg" maxlength="500" placeholder="Enter your message here"></textarea>
      </div>

      <div class="modal-footer">
        <a href="#!" data-reg={!! $data['candidates'][$i]->applNo!!} class="discard btn modal-action modal-close waves-effect waves-green btn-flat">Discard</a>
      </div>
    </div> 
    </div>
          @endif
          @endfor

        <div class="center">
      <ul class="pagination">
    <li class="disabled"><a href={!! $data["candidates"]->previousPageUrl()!!}><i class="material-icons">chevron_left</i></a></li>
    <li class="active teal" ><a href="#!">{!! $data["candidates"]->currentPage() !!}</a></li>
    <li class="waves-effect"><a href={!! $data["candidates"]->nextPageUrl()!!}><i class="material-icons">chevron_right</i></a></li>
  </ul>
  </div>
   </div>
   <div class="space-medium"></div>
<div class="center">
   <a class="waves-effect waves-light btn" href="ms">View M.S. applicants</a>
  </div>
   </div>
<div class="space-large"></div>

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
                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/">Institute Website</a></li>
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