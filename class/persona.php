<?php 

require_once 'lib.php';

class Persona
{

	private $per;





	public function  __construct()
	{
		$this->per = $array = array();
	}



	public function getpersonas()
	{
		$sql = "select * from personas";
		$res = mysql_query($sql,Conectar::con());
		while ($reg = mysql_fetch_assoc($res)) 
		{
			$this->per[]= $reg;
		}
		return $this-> per;
	}



}



 ?>