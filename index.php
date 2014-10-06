<?php 


require 'class/class.php';
require 'class/lib.php';

// $var= new Miclase(78);

// echo $var-> get_num();
// $obj = new Padre();
// $obj->saludo();

//$obj = new Hijo();

//echo $obj->welcome();
//echo "<br>";
//$obj->imprime();

$db = new Personas();

$datos = $db -> Getpersonas();

// print_r($datos);

//-----------------------------------------------------------------------------
// aqui usamos un foreach para traer los registros de la base de datos
// ----------------------------------------------------------------------------

// foreach ($datos as $key) 
// {
// 	echo $key["nombre"]. "---- ". $key["correo"]."---".$key["descripcion"]."---".$key["fecha"];
//     echo "<br>";
// }

// ---------------------------------------------------------------------------------------------------
// aqui buscamos el resultado haciendo un ciclo for por el cual usamos el contador con la funcion sizeof()
// ___________________________________________________________________________________________________

for ($i=0; $i < sizeof($datos); $i++) 
{ 
	echo $datos[$i]["nombre"]. "---- ". $datos[$i]["correo"]."---".$datos[$i]["descripcion"]."---".$datos[$i]["fecha"];
    echo "<br>";
}

 ?>