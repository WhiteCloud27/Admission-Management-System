<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


<div class="formDesign"style="width:70%; margin:auto; " >
<h1>Apply form</h1>

<form action="{{ route('getadmit') }}" method="post" enctype="multipart/form-data" >
    @csrf

    <hr class="mb-5">
    <h4>Personal Information</h4>


    <div class="row mb-3">
        
        <div class="col-sm-6" >
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name "required>
        </div>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
        </div>
    </div>
    <div class="row mb-3">
        
        <div class="col-sm-6" >
        <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Father's Name"required>
        </div>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Mother's Name" required>
        </div>
    </div>

    <div class="row mb-3">
        
        <div class='col-sm-6'>
         <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
        <input type="text" class="form-control" id="dateofBirth" name="dateofBirth" placeholder="Date of Birth" required>
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>
        <div class="col-sm-6">
               <label for="gender"><strong>Gender:</strong></label>
            <input type="radio" name="gender" value="Male"  style="margin-left:20px">Male
            <input type="radio" name="gender" value="female" style="margin-left:20px">Female
            <input type="radio" name="gender" value="others" style="margin-left:20px">Others
        </div>

    </div>
  
        
    <h4>Present Address</h4>
        
    <div class="row mb-3">
                
                <div class="col-sm-4" >
                <input type="text" class="form-control" id="presentVillage" name="presentVillage" placeholder="Enter your village"required>
                </div>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="presentUnion" name="presentUnion" placeholder="Enter your union" required>
                </div>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="presentPostOffice" name="presentPostOffice" placeholder="Enter your post office" required>
                </div>
    </div>
        
    <div class="row mb-3">
                
                <div class="col-sm-6" >
                <input type="text" class="form-control" id="presentThana" name="presentThana" placeholder="Enter your thana"required>
                </div>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="presentDistrict" name="presentDistrict" placeholder="Enter your district" required>
                </div>
    </div>

    <h4>Permanent Address</h4>
    <div class="row mb-3">
                
                <div class="col-sm-4" >
                <input type="text" class="form-control" id="permanentVillage" name="permanentVillage" placeholder="Enter your village"required>
                </div>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="permanentUnion" name="permanentUnion" placeholder="Enter your union" required>
                </div>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="permanentPostOffice" name="permanentPostOffice" placeholder="Enter your post office" required>
                </div>
    </div>
        
    <div class="row mb-3">
                
                <div class="col-sm-6" >
                <input type="text" class="form-control" id="permanentThana" name="permanentThana" placeholder="Enter your thana"required>
                </div>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="permanentDistrict" name="permanentDistrict" placeholder="Enter your district" required>
                </div>
    </div>

    <h4>Select Exam Unit</h4>
    
    <div class="row mb-3">

                <div class="col-sm-12" >
                    <select class="form-control" id="faculty" type="text" name="faculty" required>
                    <option value="maths" selected>Faculty of Mathematical & Physical Sciences</option>
                    <option value="arts">Faculty of Arts & Humanities</option>
                    <option value="social">Faculty of Social Sciences</option>
                    <option value="bio">Faculty of Biological Sciences</option>
                    <option value="busi">Faculty of Business Studies</option>
                    <option value="law">Faculty of Law</option>
                    <option value="ins">Institute</option>
                    </select>
                </div>          
    </div>


    <div class="row mb-3">
        <div class="col-sm-4" >
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email "required>   
        </div>
        <div class="col-sm-4" >
            <input type="number" class="form-control" id="roll"  step="1" name="roll" placeholder="Enter your roll "  class="@error('roll') is-invalid @enderror" required> 
            @error('roll')
                        <strong class="text-danger">{{ $message }}</strong>
            @enderror  
        </div>

        <div class="col-sm-4" >
            <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Enter your phone number "required>
        </div>
    </div>  
    <br>
    <button class="btn btn-primary btn-lg btn-block" type="submit" style="width:25%; margin:auto">submit</button>
    <br>
        
    </form>
    </div>

    