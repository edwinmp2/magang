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

		public function getValue()
		{
			return $this->value."<br>";
		}
	}

	$tes = new TestClass();
	$tes->setValue('hello world');
	$tes->getValue();

    echo $tes;

?>