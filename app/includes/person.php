<?php
    /**
     * Contains information of Persons
     */
	class Person
	{
		private $firstName;
		private $lastName;
		private $phoneNumber;
		private $mail;

		public function setFirstName($name)
		{
			$this->firstName = $name;
		}
		public function getFirstName()
		{
			return $this->firstName;
		}
		public function setLastName($name)
		{
			$this->lastName = $name;
		}
		public function getLastName()
		{
			return $this->lastName;
		}
		public function setPhoneNum($phoneNum)
		{
			$this->phoneNumber = $phoneNum;
		}
		public function getPhoneNum()
		{
			return $this->phoneNumber;
		}
        public function setMail($mail)
        {
        	$this->mail = $mail;
        }
        public function getMail()
        {
        	return $this->mail;
        }
	}
