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

	$tes = new TestClass(); //call class TestClass
	$tes->setValue('hello world'); //set value to TestClass
	$tes->getValue(); //get value from TestClass

    echo $tes;

?>