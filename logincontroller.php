<?php
require('../../../Heros/models/HeroLoginModel.php');
class logincontroller {
	
	public function Loginheros($name,$tick,$time)
	{
		try {
			$loginmodel = new HeroLoginModel();
			return $loginmodel->login($name, $tick, $time);
		}
		catch (Exception $e)
		{
			echo $e->getMessage();	
		}

	}
	
	function __construct() {
	}
	function __destruct() {
	}
}

?>