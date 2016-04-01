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
</head>
<body>
	
  <div class="container-fluid">
    <div class="row">
      <div class="col l2">
        <img width="30%" height="30%" src="{{URL::asset('assets/images/logo.png')}}">
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
            
              <h5><b>Registration Number:</b>{!! $data['candidates']['registrationNumber'] !!}</h5>
            
            
          </div>  
          <div class="col l4 s12">
            
          </div>
          </div>    
        </div>
      </div>

      <div class="row">
        <p>Demand Draft Details:</p>
        <div class="col s12">
          <div class="row">
            <div class="input-field col l4 s6">
              <p><b>D.D Number:</b>{!! $data['dd']['ddno'] !!}</p>
            </div>
            <div class="input-field col l4 s6 offset-l4">

              <p><b>D.D Date:</b>{!! $data['dd']['date'] !!}</p>
            </div>
          </div>      
          <div class="row">
            <div class="input-field col l4 s6">
              <p><b>Amount:</b>{!! $data['dd']['amount'] !!}</p>
            </div>
            <div class="input-field col l4 s6 offset-l4">
              <p><b>Drawn At:</b>{!! $data['dd']['drawnAt'] !!}</p>
            </div>
          </div>      
        </div>

        <div class="row">
        <p>Application Category</p>
        <div class="col s12">
          <div class="row">
            <div class="input-field col l4 s6">
              <p><b>{!! $data['candidates']['applicationCategory'] !!}</b></p>
            </div>
            
          </div>      
        </div>
      </div>
  </div>
      <div class="row">
        <p>Applicant Details</p>
        <div class="col s12">

          <div class="row">
            <div class="input-field col l5 s6">
              <p><b>Department:</b>{!! $data['candidates']['department'] !!}</p>
            </div>
             <div class="input-field col l5 offset-l2 s6">
              <p><b>Area of Research:</b>{!! $data['candidates']['areaOfResearch'] !!}</p>
            </div>
          </div>      

          <div class="row">
            <div class="input-field col l5 s6">
              <p><b>Name:</b>{!! $data['candidates']['name'] !!}</p>
            </div>
             <div class="input-field col l5 offset-l2 s6">
              <p><b>Father's Name:</b>{!! $data['candidates']['fatherName'] !!}</p>
            </div>
          </div>

          <div class="row">
            <div class="input-field col l5">
              <p><b>Date of Birth:</b>{!! $data['candidates']['dob'] !!}</p>
            </div>

             <div class="input-field col l5 offset-l2">
              <p><b>Category:</b>{!! $data['candidates']['category'] !!}</p>
            </div>
          </div> 

          <div class="row">
            <div class="input-field col l5">
              <p><b>Sex:</b>{!! $data['candidates']['sex'] !!}</p>
              
            </div>

             <div class="input-field col l5 offset-l2">
            <p><b>Marital Status:</b>{!! $data['candidates']['maritalStatus'] !!}</p>
            </div>
          </div> 

          <div class="row">
            <div class="input-field col l5">
               <p><b>Physically Handicapped:</b>{!! $data['candidates']['ph'] !!}</p>
            </div>
             <div class="input-field col l5 offset-l2">
              <p><b>Nationality:</b>{!! $data['candidates']['nationality'] !!}</p>
            </div>
          </div>           

           <div class="row">
            <div class="input-field col l5">            
         <p><b>Address for Communication:</b>{!! $data['candidates']['addrforcomm'] !!}</p>
            </div>
             <div class="input-field col l5 offset-l2">
             <p><b>Permanent Address:</b>{!! $data['candidates']['permanentaddr'] !!}</p>
            </div>
          </div> 

        </div>
      </div>

      <div class="row">
        <div class="col s12">
        <p>Undergraduate</p>
           <div class="row">
            <div class="input-field col l5">
             <p><b>Name of Degree:</b>{!! $data['ug']['degreeName'] !!}</p>
            </div>
             <div class="input-field col l5 offset-l2">
              <p><b>Branch:</b>{!! $data['ug']['branch'] !!}</p>
            </div>
          </div>

          <div class="row">
            <div class="input-field col l6">
             <p><b>Percentage:</b>{!! $data['ug']['percentage'] !!}</p>
            </div>
            
            <div class="input-field col l6">
             <p><b>Class:</b>{!! $data['ug']['class'] !!}</p>
            </div>
          </div> 
          </div>
          </div>

          <div class="row">
            <div class="input-field col l12 s12">
              <p><b>Nmae of Institution:</b>{!! $data['ug']['institutionName'] !!}</p>
            </div>

            <div class="input-field col l12 s12">
              <p><b>Name of University:</b>{!! $data['ug']['universityName'] !!}</p>
            </div>

            <div class="input-field col l4 s4">
              

              <p><b>Year of Passing:</b>{!! $data['ug']['yop'] !!}</p>
            </div>
          </div>

          <div class="row">
        <div class="col s12">
        <p>Postgraduate</p>
           <div class="row">
            <div class="input-field col l5">
             <p><b>Name of Degree:</b>{!! $data['pg']['degreeName'] !!}</p>
            </div>
             <div class="input-field col l5 offset-l2">
              <p><b>Branch:</b>{!! $data['pg']['branch'] !!}</p>
            </div>
          </div>

          <div class="row">
            <div class="input-field col l6">
             <p><b>Percentage:</b>{!! $data['pg']['percentage'] !!}</p>
            </div>
            
            <div class="input-field col l6">
             <p><b>Class:</b>{!! $data['pg']['class'] !!}</p>
            </div>
          </div> 
          </div>
          </div>

          <div class="row">
            <div class="input-field col l12 s12">
              <p><b>Nmae of Institution:</b>{!! $data['pg']['institutionName'] !!}</p>
            </div>

            <div class="input-field col l12 s12">
              <p><b>Name of University:</b>{!! $data['pg']['universityName'] !!}</p>
            </div>

            <div class="input-field col l4 s4">
              <p><b>Year of Passing:</b>{!! $data['pg']['yop'] !!}</p>
            </div>
          </div>

          <div class="row">
            <p>*Write as 'RA'if results awaiting</p>
            <div class="col l6 s6">
              <p><b>GATE/NET/SLET/CSIR/CAT/UGC Score:</b>{!! $data['others']['score'] !!}</p>
              
            </div>
            <div class="col l6 s6">
              <p><b>Enter GATE/NET/SLET/CSIR/CAT/UGC Rank:</b>{!! $data['others']['rank'] !!}</p>
            </div>
            <div class="col l12 s12">
              <p><b>Title of P.G. Project:</b>{!! $data['others']['pgproject'] !!}</p>
            </div>
            <div class="col l12 s12">
              <p><b>Details of publication in refereed journals/ Proceedings of Conferences:</b>{!! $data['others']['publications'] !!}</p>
            </div>
            <div class="col l12 s12">
             <p><b>Awards/ Prizes/Sports/NCC etc:</b>{!! $data['others']['awards'] !!}</p>
            </div>
          </div>

          <div class="row">
            <p>Details of Professional Experience <br>
            *(In case of more than one employer fill the details,else fill N.A.)</p>
            <div class="col s12 l12">
               <p><b>Name & Address of Employer 1:</b>{!! $data['others']['proexp1'] !!}</p>
            </div>
            <div class="col s12 l12">
              <p><b>Name & Address of Employer 1:</b>{!! $data['others']['proexp2'] !!}</p>
            </div>
            <div class="col s12 l12">
              <p><b>Name & Address of Employer 1:</b>{!! $data['others']['proexp3'] !!}</p>
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
