<?php
	/**
	* 
	*/
	class TestClass
	{
		public $value = "test value";

		public function __construct()
		{
			//for initiate class
			echo 'Class "',__CLASS__,'" loaded<br>';
		}

		public function __destruct()
		{
			echo 'Class "',__CLASS__,'" destroyed<br>';
		}

		public function __toString()
		{
			return $this->getValue();
		}

		public function setValue($value)
		{
			$this->value = $value;
		}

		protected function getValue()
		{
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

		public function getProtectedValue()
		{
			return $this->getValue();
		}
	}

	$tes = new OtherClass();
	$tes->getProtectedValue();

    echo $tes;

?>