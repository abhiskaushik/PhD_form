  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admissions NITT | Print Page</title>
  <link rel="stylesheet" href="{{base_path('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{base_path('public/assets/css/materialize.min.css')}}">
  <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

  <script src="{{base_path('public/assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{base_path('public/assets/js/materialize.min.js')}}"></script> 
</head>
<body>

<div class="container-fluid main">
  <div class="row">
    <div class="col l4">
      <img width="100px" height="100px" src="{{base_path('public/assets/images/logo.png')}}">
    </div>
    <div class="col l8">
       <div class="space-small"></div>
          <h4>APPLICATION FOR ADMISSION<br> TO Ph.D. PROGRAMME <br>(2016 – 2017)</h4>
    </div>
  </div>




@if($phdorms  == 'PHD')
    <div class="">
    <h4>Form Details: </h4>
    <div class="row">
      <h5>Application Details</h5>
      <div class="col l6">
        <p><b>Registration Number:</b> {!! $candidates['registrationNumber'] !!}</p>

      </div>
      <div class="col l6">
        <p><b>Date of Registration:</b> {!! $candidates['dateOfReg'] !!}
          </p>
      </div>
      </div>
      <div class="row">
        <h5>General Details:</h5>
        <div class="col l6">
          <p><b>Department 1:</b> {!! $candidates['dept1'] !!}</p>
          <p><b>Department 3:</b> {!! $candidates['dept3'] !!}</p>
        </div>
        <div class="col l6">
          <p><b>Department 2:</b> {!! $candidates['dept2'] !!}</p>
          <p><b>Area of Research:</b> {!! $candidates['areaOfResearch'] !!}</p>
        </div>
      </div>

      <div class="row">
        <h5>Personal Details:</h5>
        <div class="col l6">
          <p><b>Name of Candidate:</b> {!! $candidates['name'] !!}</p>
          <p><b>Email Id:</b> {!! $candidates['email'] !!}</p>
          <p><b>Category:</b> {!! $candidates['category'] !!}</p>
          <p><b>Marital Status: </b>{!! $candidates['maritalStatus'] !!}</p>
          <p><b>Nationality:</b> {!! $candidates['nationality'] !!}</p>
          <p><b>Permanent Address:</b> {!! $candidates['permanentaddr'] !!}</p>
          <p><b>Landline Number:</b> {!! $candidates['landline'] !!}</p>
        </div>
        <div class="col l6">
          <p><b>Father's Name:</b> {!! $candidates['fatherName'] !!}</p>
          <p><b>Date of Birth:</b> {!! $candidates['dob'] !!}</p>
          <p><b>Sex :</b> {!! $candidates['sex'] !!}</p>
          <p><b>Physically Handicapped:</b> {!! $candidates['PH'] !!}</p>
          <p><b>Address for Communication:</b> {!! $candidates['addrforcomm'] !!}</p>
          <p><b>Mobile Number:</b> {!! $candidates['mobile'] !!}</p>
        </div>
      </div>

      <div class="row">
        <h5>Undergraduate Details</h5>
        <div class="col l6">
          <p><b>Degree:</b> {!! $ug['degreeName'] !!}</p>
          <p><b>G.P.A:</b> {!! $ug['gpa'] !!}</p>
          <p><b>Name of Institution:</b> {!! $ug['institutionName'] !!}</p>
          <p><b>Year of Passing:</b> {!! $ug['yop'] !!}</p>
        </div>
        <div class="col l6">
          <p><b>Branch:</b> {!! $ug['branch'] !!}</p>
          <p><b>Class:</b> {!! $ug['class'] !!}</p>
          <p><b>Name of University:</b> {!! $ug['universityName'] !!}</p>
        </div>
      </div>
      <div class="row">
        <h5>Post-Graduate Details:</h5>
        <div class="col l6">
          <p><b>Degree:</b> {!! $pg['degreeName'] !!}</p>
          <p><b>G.P.A:</b> {!! $pg['gpa'] !!}</p>
          <p><b>Name of Institution:</b> {!! $pg['institutionName'] !!}</p>
          <p><b>Year of Passing:</b> {!! $pg['yop'] !!}</p> 
        </div>
        <div class="col l6">
          <p><b>Branch:</b> {!! $pg['branch'] !!}</p>
          <p><b>Class:</b> {!! $pg['class'] !!}</p>
          <p><b>Name of University:</b> {!! $pg['universityName'] !!}</p>
        </div>
      </div>

      <div class="row">
        <h5>Publication/Project Details:</h5>
        <div class="col l6">
          <p><b>Title of Project:</b> {!! $others['pgproject'] !!}</p>
          <p><b>Details of Publication 2:</b> {!! $others['publications2'] !!}</p>
          <p><b>Awards1:</b> {!! $others['awards1'] !!}</p>
          <p><b>Awards3:</b> {!! $others['awards3'] !!}</p>
        </div>
        <div class="col l6">
          <p><b>Details of Publication 1:</b> {!! $others['publications1'] !!}</p>
          <p><b>Details of Publication 3:</b> {!! $others['publications3'] !!}</p>
          <p><b>Awards2:</b> {!! $others['awards2'] !!}</p>
        </div>
      </div>
      <div class="row">
        <h5>Employer Details:</h5>
        <div class="col l12">
          <p><b>Employer Details 1:</b> {!! $pro['proexp1'] !!}</p>
          <p><b>Position :</b> {!! $pro['position1'] !!}</p>
          <div class="col l6"><p><b>From :</b> {!! $pro['from1'] !!}</p></div>  
          <div class="col l6"><p><b>To :</b> {!! $pro['to1'] !!}</p></div>  
        </div>
        
      </div>
      <div class="row">
        <h5>Employer Details:</h5>
        <div class="col l12">
          <p><b>Employer Details 2:</b> {!! $pro['proexp2'] !!}</p>
          <p><b>Position :</b> {!! $pro['position2'] !!}</p>
          <div class="col l6"><p><b>From :</b> {!! $pro['from2'] !!}</p></div>  
          <div class="col l6"><p><b>To :</b> {!! $pro['to2'] !!}</p></div>  
        </div>
        
      </div>
      <div class="row">
        <h5>Employer Details:</h5>
        <div class="col l12">
          <p><b>Employer Details 3:</b> {!! $pro['proexp3'] !!}</p>
          <p><b>Position :</b> {!! $pro['position3'] !!}</p>
          <div class="col l6"><p><b>From :</b> {!! $pro['from3'] !!}</p></div>  
          <div class="col l6"><p><b>To :</b> {!! $pro['to3'] !!}</p></div>  
        </div>
        
      </div>

  
  </div>


          @else

           <div class="">
    <h4>Form Details: </h4>
    <div class="row">
      <h5>Application Details</h5>
      <div class="col l6">
        <p><b>Registration Number:</b> {!! $candidates['registrationNumber'] !!}</p>

      </div>
      <div class="col l6">
        <p><b>Date of Registration:</b> {!! $candidates['dateOfReg'] !!}
          </p>
      </div>
      </div>
      <div class="row">
        <h5>General Details:</h5>
        <div class="col l6">
          <p><b>Department 1:</b> {!! $candidates['dept1'] !!}</p>
          <p><b>Department 3:</b> {!! $candidates['dept3'] !!}</p>
        </div>
        <div class="col l6">
          <p><b>Department 2:</b> {!! $candidates['dept2'] !!}</p>
          <p><b>Area of Research:</b> {!! $candidates['areaOfResearch'] !!}</p>
        </div>
      </div>

      <div class="row">
        <h5>Personal Details:</h5>
        <div class="col l6">
          <p><b>Name of Candidate:</b> {!! $candidates['name'] !!}</p>
          <p><b>Email Id:</b> {!! $candidates['email'] !!}</p>
          <p><b>Category:</b> {!! $candidates['category'] !!}</p>
          <p><b>Marital Status: </b>{!! $candidates['maritalStatus'] !!}</p>
          <p><b>Nationality:</b> {!! $candidates['nationality'] !!}</p>
          <p><b>Permanent Address:</b> {!! $candidates['permanentaddr'] !!}</p>
          <p><b>Landline Number:</b> {!! $candidates['landline'] !!}</p>
        </div>
        <div class="col l6">
          <p><b>Father's Name:</b> {!! $candidates['fatherName'] !!}</p>
          <p><b>Date of Birth:</b> {!! $candidates['dob'] !!}</p>
          <p><b>Sex :</b> {!! $candidates['sex'] !!}</p>
          <p><b>Physically Handicapped:</b> {!! $candidates['PH'] !!}</p>
          <p><b>Address for Communication:</b> {!! $candidates['addrforcomm'] !!}</p>
          <p><b>Mobile Number:</b> {!! $candidates['mobile'] !!}</p>
        </div>
      </div>

      <div class="row">
        <h5>Undergraduate Details</h5>
        <div class="col l6">
          <p><b>Degree:</b> {!! $ug['degreeName'] !!}</p>
          <p><b>G.P.A:</b> {!! $ug['gpa'] !!}</p>
          <p><b>Name of Institution:</b> {!! $ug['institutionName'] !!}</p>
          <p><b>Year of Passing:</b> {!! $ug['yop'] !!}</p>
        </div>
        <div class="col l6">
          <p><b>Branch:</b> {!! $ug['branch'] !!}</p>
          <p><b>Class:</b> {!! $ug['class'] !!}</p>
          <p><b>Name of University:</b> {!! $ug['universityName'] !!}</p>
        </div>
      </div>
      <div class="row">
        <h5>Educational Details:</h5>
        <div class="col l4"><p><b>Semester 1:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa1'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax1'] !!}</p></div>
        <div class="col l4"><p><b>Semester 2:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa2'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax2'] !!}</p></div>
        <div class="col l4"><p><b>Semester 3:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa3'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax3'] !!}</p></div>
        <div class="col l4"><p><b>Semester 4:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa4'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax4'] !!}</p></div>
        <div class="col l4"><p><b>Semester 5:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa5'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax5'] !!}</p></div>
        <div class="col l4"><p><b>Semester 6:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa6'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax6'] !!}</p></div>
        <div class="col l4"><p><b>Semester 7:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa7'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax7'] !!}</p></div>
        <div class="col l4"><p><b>Semester 8:</b></p></div>
        <div class="col l4"><p><b>G.P.A obtained:</b> {!! $scores['gpa8'] !!}</p></div>
        <div class="col l4"><p><b>Max G.P.A:</b> {!! $scores['gpamax8'] !!}</p></div>
      </div>
      <div class="row">
        <h5>Employer Details:</h5>
        <div class="col l12">
          <p><b>Employer Details 1:</b> {!! $pro['proexp1'] !!}</p>
          <p><b>Position :</b> {!! $pro['position1'] !!}</p>
          <div class="col l6"><p><b>From :</b> {!! $pro['from1'] !!}</p></div>  
          <div class="col l6"><p><b>To :</b> {!! $pro['to1'] !!}</p></div>  
        </div>
        
      </div>
      <div class="row">
        <h5>Employer Details:</h5>
        <div class="col l12">
          <p><b>Employer Details 2:</b> {!! $pro['proexp2'] !!}</p>
          <p><b>Position :</b> {!! $pro['position2'] !!}</p>
          <div class="col l6"><p><b>From :</b> {!! $pro['from2'] !!}</p></div>  
          <div class="col l6"><p><b>To :</b> {!! $pro['to2'] !!}</p></div>  
        </div>
        
      </div>
      <div class="row">
        <h5>Employer Details:</h5>
        <div class="col l12">
          <p><b>Employer Details 3:</b> {!! $pro['proexp3'] !!}</p>
          <p><b>Position :</b> {!! $pro['position3'] !!}</p>
          <div class="col l6"><p><b>From :</b> {!! $pro['from3'] !!}</p></div>  
          <div class="col l6"><p><b>To :</b> {!! $pro['to3'] !!}</p></div>  
        </div>
        
      </div>
          @endif

</div>
</div>
</body>
</html>
