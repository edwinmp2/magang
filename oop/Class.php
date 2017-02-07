<?php
	/**
	* 
	*/
	class TestClass
	{
		//set first default value
		public $value = "test value";

		//variable to fill value, can be set on new TestClass
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

	var_dump($tes); //print value $tes
?>