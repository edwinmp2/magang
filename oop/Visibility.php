<?php
	/**
	* 
	*/
	class TestClass
	{
		public $value = "test value";

		public function __construct()
		{
			//initiate class
			echo 'Class "',__CLASS__,'" loaded<br>';
		}

		public function __destruct()
		{
			//destruct class
			echo 'Class "',__CLASS__,'" destroyed<br>';
		}

		public function __toString()
		{
			//covert object to string
			return $this->getValue();
		}

		public function setValue($value)
		{
			//set value
			$this->value = $value;
		}

		//private or protected to protect access to this method
		protected function getValue()
		{
			//get value
			return $this->value."<br>";
		}
	}

	/**
	* 
	*/
	class OtherClass extends TestClass
	{
		public function __construct()
		{
			//call parent construct
			parent::__construct();
			echo 'This is Construct "',__CLASS__,'"<br>';
		}

		public function newMethod()
		{
			echo 'Class "',__CLASS__,'"<br>';
		}

		//to get a protected method value
		public function getProtectedValue()
		{
			//returning value from protected method
			return $this->getValue();
		}
	}

	//call class TestClass
	$tes = new OtherClass();
	//get value from protected method, if you cal $tes->getValue, you will see error
	$tes->getProtectedValue(); 

    echo $tes;

?>