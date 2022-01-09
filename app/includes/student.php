<?php 
	// require("person.php");
	use App\person;

	Class Student extends Person
	{
		private $examRoll;
		
        public function setExamRoll($roll)
        {
        	$this->examRoll = $roll;
        }
        public function getExamRoll()
        {
        	return $this->examRoll;
        }
	}

