
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<div class="formDesign"style="width:70%; margin:auto; " >
<h1>Apply form</h1>

<form action="users" method="post" >
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
		
		<div class="col-sm-6" >
		<input type="text" class="form-control" id="dateofBirth" name="dateofBirth" placeholder="Date of Birth" required>
		</div>
		<div class="col-sm-6">
		       <label for="gender"><strong>Gender:</strong></label>
			<input type="radio" name="gender" value="Male"  style="margin-left:20px">Male
			<input type="radio" name="gender" value="female" style="margin-left:20px">Female
			<input type="radio" name="gender" value="others" style="margin-left:20px">Others
    	</div>

	</div>
	<h4>Educational  Qualification</h4>
	<div class="row mb-3">
				
			<div class="col-sm-4" >
				<select class="form-control" id="hscYear" type="text" name="hscYear" require>
				<option selected>Enter your HSC passing year</optopm>
				<option value="2020">2020</option>
  				<option value="2019">2019</option>

				</select>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="hscGpa" name="hscGpa" placeholder="HSC GPA" required>
			</div>
			<div class="col-sm-4">
				
				<select class="form-control" id="hscYear" type="text" name="hscBoard" require>
					<option selected>Enter your HSC Board</optopm>
					<option value="Dhaka">Dhaka</option>
					<option value="Rajshahi">Rajshahi</option>
					<option value="Comilla">Comilla</option>
					<option value="Jessore">Jessore</option>
					<option value="Chittagong">Chittagong</option>
					<option value="Barisal">Barisal</option>
					<option value="Sylhet">Sylhet</option>
					<option value="Dinajpur">Dinajpur</option>
					<option value="Madrasah">Madrasah</option>

				</select>
			</div>
				
			
	</div>
		
	<div class="row mb-3">
				
				<div class="col-sm-6" >
				<input type="text" class="form-control" id="hscReg" name="hscReg" placeholder="HSC Registration No"required>
				</div>
				<div class="col-sm-6">
				<input type="text" class="form-control" id="hscRoll" name="hscRoll" placeholder="HSC Roll No" required>
				</div>
				
	</div>
	<div class="row mb-3">
				<div class="col-sm-4" >
					<select class="form-control" id="sscYear" type="tesxt" name="sscYear" require>
					<option selected>Enter your SSC passing year</optopm>
					<option value="2018">2018</option>
					<option value="2017">2017</option>

					</select>
				</div>


				<div class="col-sm-4">
				<input type="text" class="form-control" id="sscGpa" name="sscGpa" placeholder="SSC GPA" required>
				</div>
				<div class="col-sm-4">
					<select class="form-control" id="sscBoard" type="text" name="sscBoard" require>
						<option selected>Enter your SSC Board</optopm>
						<option value="Dhaka">Dhaka</option>
						<option value="Rajshahi">Rajshahi</option>
						<option value="Comilla">Comilla</option>
						<option value="Jessore">Jessore</option>
						<option value="Chittagong">Chittagong</option>
						<option value="Barisal">Barisal</option>
						<option value="Sylhet">Sylhet</option>
						<option value="Dinajpur">	Dinajpur</option>
						<option value="Madrasah">Madrasah</option>

					</select>
			
				</div>
	</div>
		
	<div class="row mb-3">
				
				<div class="col-sm-6" >
				<input type="text" class="form-control" id="sscReg" name="sscReg" placeholder="SSC Registration No"required>
				</div>
				<div class="col-sm-6">
				<input type="text" class="form-control" id="sscRoll" name="sscRoll" placeholder="SSC Roll No" required>
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
					<select class="form-control" id="unit" type="text" name="unit" required>
					<option value="AUnit" selected>A Unit</option>
					<option value="BUnit">B Unit</option>
					<option value="CUnit">C Unit</option>
					<option value="DUnit">D Unit</option>
					<option value="HUnit">H Unit</option>
					</select>
				</div>			
	</div>

	<div class="row mb-3">
		<div class="col-sm-6" >
			<label class="form-label" for="profileImage"><strong>Upload Your Image</strong></label>
			<input type="file" class="form-control" id="profileImage" name="profileImage" required/>
		</div>
		<div class="col-sm-6" >
			<label class="form-label" for="signatureImage"> <strong>Upload Your Signature<strong></label>
			<input type="file" class="form-control" id="signatureImage" name="signatureImage" required/>
		</div>
	</div>	


	<div class="row mb-3">
		<div class="col-sm-4" >
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email "required>	
		</div>

		<div class="col-sm-4" >
			<input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Enter your phone number "required>
		</div>
		<div class="col-sm-4" >
			<input type="password" class="form-control" id="password" name="password" placeholder="Password "required>
		</div>
	</div>	
	<br>


	<button class="btn btn-primary btn-lg btn-block" type="submit" style="width:25%; margin:auto">submit</button>
	<br>
		
	</form>
	</div>


	
	