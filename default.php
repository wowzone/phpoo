<?php 	


class Conect_DB
{
	public static function con()
	{
		$conectar = mysql_connect('localhost','root','adminpass');
		if (!$conectar) {
			echo "error coneccion";
			exit;
		}
		mysql_select_db('modulo3');
		// $peticion = mysql_query("select * from personas");
		mysql_query("SET NAMES 'utf8'");
		return $conectar;
	}	
}

class mostrar_personas
{
	private $per;


	public function __construct()
	{
		$this-> per = array();
	}

	public function mostrar_records()
	{
		$peticion = "select * from personas";
		$resultado = mysql_query( $peticion,Conect_DB::con() );
		while ($registro=mysql_fetch_assoc($resultado)) 
		{
			$this-> per[] = $registro;
		}
		return $this-> per;
	}
}




 ?>