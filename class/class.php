<?php 


class Miclase
{

	private $miatributo;
	private $otro = array();
	private $a;
	private $num;

	public function __construct($datos)
	{
		$this->a=array();
		$this->num = $datos;
	}

	public function get_num()
	{
		return $this->num;
	}

	public function get_saludo()
	{
		$this->miatributo="hola mundo";
		return $this->miatributo;
	}
}


abstract class Padre
{
	protected $hola= 'hola mundo de Padre';


	public function saludo()
	{
		return $this->hola;
	}

}

class Hijo extends Padre 	
{
	public function welcome()
	{
		return self::saludo();
	}

	public function imprime()
	{
		return $this-> hola;
	}

}



 ?>