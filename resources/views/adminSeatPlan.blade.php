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
<h1></h1>

<form action="adminSeatPlan" method="post" enctype="multipart/form-data" >
	@csrf

	<hr class="mb-5">
	<h4>Personal Information</h4>


	<div class="row mb-3">
		
		<div class="col-sm-12" >
		<input type="text" class="form-control" id="hscRegistrationNo" name="hscRegistrationNo" placeholder="Registration No "required>
		</div>
    </div>
	<div class="row mb-3">

		<div class="col-sm-12" >
			<select class="form-control" id="examUnit" type="text" name="examUnit" required>
			<option value="AUnit" selected>A Unit</option>
			<option value="BUnit">B Unit</option>
			<option value="CUnit">C Unit</option>
			<option value="DUnit">D Unit</option>
			<option value="HUnit">H Unit</option>
			</select>
		</div>			
	</div>
    <div class="row mb-3">
		
		<div class="col-sm-12" >
		<input type="text" class="form-control" id="institution" name="institution" placeholder="institution"required>
		</div>
    </div>

    <div class="row mb-3">
		
		<div class="col-sm-12" >
		<input type="text" class="form-control" id="roomNo" name="roomNo" placeholder="Room No"required>
		</div>
    </div>
    <div class="row mb-3">
		
	<div class='col-sm-12'>
         <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
		<input type="text" class="form-control" id="examTime" name="examTime" placeholder="Exam date and time" required>
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
    </div>

	<br>
	<button class="btn btn-primary btn-lg btn-block" type="submit" style="width:25%; margin:auto">submit</button>
	<br>
		
	</form>
	</div>

	