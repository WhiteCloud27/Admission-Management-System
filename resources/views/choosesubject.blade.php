@php
	// use App\includes\student;
@endphp

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Choose Subject</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/choosesubject.css')}}">
</head>

<body>
    <!-- choose suject for student-->
    <!-- <h4></h4> -->
    <div class="border border-5">
    	<p class="h4">Subject Choice Form</p>
    	<div class="card col-lg-6 ml-4">
    		
    	</div>
        <form method="POST" action="{{ route('choose.submit') }}">
        	@csrf
            <!-- Name field for student name 
		     Exam Roll field for student admission roll 
		 	 Select a Faculty-->
            <div class="mb-3 row">
                <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="fname" id="fname" placeholder="Enter Your First Name" class="@error('fname') is-invalid @enderror"><br>
                    @error('fname')
    					<strong class="text-danger">{{ $message }}</strong>
					@enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lname" class="col-sm-2 col-form-label">Last Name: </label>
                <div class="col-sm-10">
                    <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name" class="@error('lname') is-invalid @enderror"><br>
                     @error('lname')
    					<strong class="text-danger">{{ $message }}</strong>
					@enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="roll" class="col-sm-2 col-form-label">Exam Roll: </label>
                <div class="col-sm-10">
                    <input type="number" name="roll" step="1" id="roll" placeholder="Enter Your Roll" class="@error('roll') is-invalid @enderror"><br>
                     @error('roll')
    					<strong class="text-danger">{{ $message }}</strong>
					@enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-10">
                    <input type="email" name="mail" id="email" placeholder="Enter your mail" class="@error('mail') is-invalid @enderror"><br>
                     @error('mail')
    					<strong class="text-danger">{{ $message }}</strong>
					@enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phnno" class="col-sm-2 col-form-label">Phone Number: </label>
                <div class="col-sm-10">
                    <input type="text" name="phoneNum" id="phnno" placeholder="Enter your phone number" class="@error('phoneNum') is-invalid @enderror"><br>
                     @error('phoneNum')
    					<strong class="text-danger">{{ $message }}</strong>
					@enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="faculty" class="col-sm-2 col-form-label">Faculty:</label>
                <div class="col-sm-10" class="@error('faculty') is-invalid @enderror">
                    
                    <input type="radio" id="mathfal" name="faculty" value="Faculty of Mathematical & Physical Sciences" >Faculty of Mathematical & Physical Sciences<br>
                    <input type="radio" id="artfal" name="faculty" value="Faculty of Arts & Humanities">Faculty of Arts & Humanities<br>
                    <input type="radio" id="socfal" name="faculty" value="Faculty of Social Sciences">Faculty of Social Sciences<br>
                    <input type="radio" id="biofal" name="faculty" value="Faculty of Biological Sciences">Faculty of Biological Sciences<br>
                	<input type="radio" id="busifal" name="faculty" value="Faculty of Business Studies">Faculty of Business Studies<br>
                    <input type="radio" id="lawfal" name="faculty" value="Faculty of Law">Faculty of Law<br>
                    <input type="radio" id="insfal" name="faculty" value="Institute">Institute<br>
                     @error('faculty')
    					<strong class="text-danger">{{ $message }}</strong>
					@enderror
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary"><br>
        </form>
    </div>
	{{-- @php   --}}
			{{-- @isset($_POST['submit']) --}}
			/**
		 	* input from choosesubject.php form
		 	* create student type object candidate
		 	* assign those input in candidate object
		 	* candidate object contain details
		 	* (name, roll, phone no, mail) of candidate
		 	*/
				//$candidate = new Student();
				//$var = $_POST['stuFirstName'];
        		//$candidate->setFirstName($var);
	
	        	//$var = $_POST['stuLastName'];
	        	//$candidate->setLastName($var);
	        	
	        	//$var = $_POST['roll'];
	        	//$candidate->setExamRoll($var);
	
	        	//$var = $_POST['phoneNum'];
	        	//$candidate->setPhoneNum($var);
	
	        	//$var = $_POST['mail'];
	        	//$candidate->setMail($var);
	
	        	//$var = $_POST['roll'];
        		//$candidate->setExamRoll($var);
			{{-- @endisset --}}
	{{-- @endphp --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity=" sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>