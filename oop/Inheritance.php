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
			//conver from object to string
			return $this->getValue();
		}

		public function setValue($value)
		{
			//set value
			$this->value = $value;
		}

		public function getValue()
		{
			//get value
			return $this->value."<br>";
		}
	}

	/**
	* 
	new class extend TestClass, can call method in TestClass
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
			//new method on new class
			echo 'Class "',__CLASS__,'"<br>';
		}
	}

	$tes = new OtherClass(); //call class TestClass
	$tes->setValue('hello world'); //set value to TestClass
	$tes->getValue(); //get value from TestClass

    echo $tes;

?>