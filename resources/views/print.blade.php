  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Success Page</title>
  <link rel="stylesheet" href="{{base_path('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{base_path('public/assets/css/materialize.min.css')}}">
  <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

  <script src="{{base_path('public/assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{base_path('public/assets/js/materialize.min.js')}}"></script> 
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col l4">
      <img width="100px" height="100px" src="{{base_path('public/assets/images/logo.png')}}">
    </div>
    <div class="col l8">
       <div class="space-small"></div>
          <h4>APPLICATION FOR ADMISSION<br> TO Ph.D. PROGRAMME <br>(2015 – 2016)</h4>
    </div>
  </div>
</div>

<div class="container-fluid">
@if($details['phdorms']  == 'phd')
  <h5>Candidate's Form</h5>
          <p><b>Registration Number:</b> {!! $candidates['registrationNumber'] !!}</p>
          <p><b>Date of Registration:</b> {!! $candidates['dateOfReg'] !!}
          </p>
          <p><b>Application Category:</b> {!! $candidates['applicationCategory'] !!}</p>
          <h5>General Details:</h5>
          <p><b>Department 1:</b> {!! $candidates['dept1'] !!}</p>
          <p><b>Department 2:</b> {!! $candidates['dept2'] !!}</p>
          <p><b>Department 3:</b> {!! $candidates['dept3'] !!}</p>
          <p><b>Area of Research:</b> {!! $candidates['areaOfResearch'] !!}</p>
          <p><b>Name of Candidate:</b> {!! $candidates['name'] !!}</p>
          <p><b>Father's Name:</b> {!! $candidates['fatherName'] !!}</p>
          <p><b>Email Id:</b> {!! $candidates['email'] !!}</p>
          <p><b>Date of Birth:</b> {!! $candidates['dob'] !!}</p>
          <p><b>Category:</b> {!! $candidates['category'] !!}</p>
          <p><b>Sex :</b> {!! $candidates['sex'] !!}</p>
          <p><b>Marital Status: </b>{!! $candidates['maritalStatus'] !!}</p>
          <p><b>Physically Handicapped:</b> {!! $candidates['PH'] !!}</p>
          <p><b>Nationality:</b> {!! $candidates['nationality'] !!}</p>
          <p><b>Address for Communication:</b> {!! $candidates['addrforcomm'] !!}</p>
          <p><b>Permanent Address:</b> {!! $candidates['permanentaddr'] !!}</p>
          <p><b>Mobile Number:</b> {!! $candidates['mobile'] !!}</p>
          <p><b>Landline Number:</b> {!! $candidates['landline'] !!}</p>

          <h5>Undergraduate Details:</h5>
          <p><b>Undergraduate Degree:</b> {!! $ug['degreeName'] !!}</p>
          <p><b>Undergraduate Branch:</b> {!! $ug['branch'] !!}</p>
          <p><b>Undergraduate G.P.A:</b> {!! $ug['gpa'] !!}</p>
          <p><b>Undergraduate Class:</b> {!! $ug['class'] !!}</p>
          <p><b>Undergraduate Name of Institution:</b> {!! $ug['institutionName'] !!}</p>
          <p><b>Undergraduate Name of University:</b> {!! $ug['universityName'] !!}</p>
          <p><b>Undergraduate Year of Passing:</b> {!! $ug['yop'] !!}</p>
          <h5>Post-Graduate Details:</h5>
          <p><b>Post-graduate Degree:</b> {!! $pg['degreeName'] !!}</p>
          <p><b>Post-graduate Branch:</b> {!! $pg['branch'] !!}</p>
          <p><b>Post-graduate G.P.A:</b> {!! $pg['gpa'] !!}</p>
          <p><b>Post-graduate Class:</b> {!! $pg['class'] !!}</p>
          <p><b>Post-graduate Name of Institution:</b> {!! $pg['institutionName'] !!}</p>
          <p><b>Post-graduate Name of University:</b> {!! $pg['universityName'] !!}</p>
          <p><b>Post-graduate Year of Passing:</b> {!! $pg['yop'] !!}</p>
          <h5>Other Details:</h5>
          <p><b>Score:</b> {!! $others['score'] !!}</p>
          <p><b>Rank:</b> {!! $others['rank'] !!}</p>
          <p><b>Title of Project:</b> {!! $others['pgproject'] !!}</p>
          <p><b>Details of Publication 1:</b> {!! $others['publications1'] !!}</p>
          <p><b>Details of Publication 2:</b> {!! $others['publications2'] !!}</p>
          <p><b>Details of Publication 3:</b> {!! $others['publications3'] !!}</p>
          <p><b>Awards1:</b> {!! $others['awards1'] !!}</p>
          <p><b>Awards2:</b> {!! $others['awards2'] !!}</p>
          <p><b>Awards3:</b> {!! $others['awards3'] !!}</p>

          <p><b>Employer Details 1:</b> {!! $pro['proexp1'] !!}</p>
          <p><b>Position :</b> {!! $pro['position1'] !!}</p>
          <p><b>From :</b> {!! $pro['from1'] !!}</p>
          <p><b>To :</b> {!! $pro['to1'] !!}</p>
          <p><b>Employer Details 2:</b> {!! $pro['proexp2'] !!}</p>
          <p><b>Position :</b> {!! $pro['position2'] !!}</p>
          <p><b>From :</b> {!! $pro['from2'] !!}</p>
          <p><b>To :</b> {!! $pro['to2'] !!}</p>
          <p><b>Employer Details 3:</b> {!! $pro['proexp3'] !!}</p>
          <p><b>Position :</b> {!! $pro['position3'] !!}</p>
          <p><b>From :</b> {!! $pro['from3'] !!}</p>
          <p><b>To :</b> {!! $pro['to3'] !!}</p>
          @else

           <h5>Candidate's Form</h5>
          <p><b>Registration Number:</b> {!! $candidates['registrationNumber'] !!}</p>
          <p><b>Date of Registration:</b> {!! $candidates['dateOfReg'] !!}
          </p>
          <p><b>Application Category:</b> {!! $candidates['applicationCategory'] !!}</p>
          <h5>General Details:</h5>
          <p><b>Department 1:</b> {!! $candidates['dept1'] !!}</p>
          <p><b>Department 2:</b> {!! $candidates['dept2'] !!}</p>
          <p><b>Department 3:</b> {!! $candidates['dept3'] !!}</p>
          <p><b>Area of Research:</b> {!! $candidates['areaOfResearch'] !!}</p>
          <p><b>Name of Candidate:</b> {!! $candidates['name'] !!}</p>
          <p><b>Father's Name:</b> {!! $candidates['fatherName'] !!}</p>
          <p><b>Email Id:</b> {!! $candidates['email'] !!}</p>
          <p><b>Date of Birth:</b> {!! $candidates['dob'] !!}</p>
          <p><b>Category:</b> {!! $candidates['category'] !!}</p>
          <p><b>Sex :</b> {!! $candidates['sex'] !!}</p>
          <p><b>Marital Status: </b>{!! $candidates['maritalStatus'] !!}</p>
          <p><b>Physically Handicapped:</b> {!! $candidates['PH'] !!}</p>
          <p><b>Nationality:</b> {!! $candidates['nationality'] !!}</p>
          <p><b>Address for Communication:</b> {!! $candidates['addrforcomm'] !!}</p>
          <p><b>Permanent Address:</b> {!! $candidates['permanentaddr'] !!}</p>
          <p><b>Mobile Number:</b> {!! $candidates['mobile'] !!}</p>
          <p><b>Landline Number:</b> {!! $candidates['landline'] !!}</p>

          <h5>Undergraduate Details:</h5>
          <p><b>Undergraduate Degree:</b> {!! $ug['degreeName'] !!}</p>
          <p><b>Undergraduate Branch:</b> {!! $ug['branch'] !!}</p>
          <p><b>Undergraduate G.P.A:</b> {!! $ug['gpa'] !!}</p>
          <p><b>Undergraduate Class:</b> {!! $ug['class'] !!}</p>
          <p><b>Undergraduate Name of Institution:</b> {!! $ug['institutionName'] !!}</p>
          <p><b>Undergraduate Name of University:</b> {!! $ug['universityName'] !!}</p>
          <p><b>Undergraduate Year of Passing:</b> {!! $ug['yop'] !!}</p>
          
          <h5>Educational Details:</h5>
          <p><b>Semester 1:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa1'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax1'] !!}</p>
          <p><b>Semester 2:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa2'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax2'] !!}</p>
          <p><b>Semester 3:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa3'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax3'] !!}</p>
          <p><b>Semester 4:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa4'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax4'] !!}</p>
          <p><b>Semester 5:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa5'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax5'] !!}</p>
          <p><b>Semester 6:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa6'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax6'] !!}</p>
          <p><b>Semester 7:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa7'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax7'] !!}</p>
          <p><b>Semester 8:</b></p>
          <p><b>G.P.A obtained:</b> {!! $score['gpa8'] !!}</p>
          <p><b>Max G.P.A:</b> {!! $score['gpamax8'] !!}</p>

          <p><b>Employer Details 1:</b> {!! $pro['proexp1'] !!}</p>
          <p><b>Position :</b> {!! $pro['position1'] !!}</p>
          <p><b>From :</b> {!! $pro['from1'] !!}</p>
          <p><b>To :</b> {!! $pro['to1'] !!}</p>
          <p><b>Employer Details 2:</b> {!! $pro['proexp2'] !!}</p>
          <p><b>Position :</b> {!! $pro['position2'] !!}</p>
          <p><b>From :</b> {!! $pro['from2'] !!}</p>
          <p><b>To :</b> {!! $pro['to2'] !!}</p>
          <p><b>Employer Details 3:</b> {!! $pro['proexp3'] !!}</p>
          <p><b>Position :</b> {!! $pro['position3'] !!}</p>
          <p><b>From :</b> {!! $pro['from3'] !!}</p>
          <p><b>To :</b> {!! $pro['to3'] !!}</p>

</div>

</body>