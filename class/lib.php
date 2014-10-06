<?php

class coneccion
{
    
    public static function conn()
    {
        $con = mysql_connect('localhost','root','adminpass');
        if (!$con)
        {
            echo 'Error Sql';
            exit;
        }
        
        mysql_query("SET NAMES 'UTF8'");
        mysql_select_db('modulo3');
        return $con;
    }
}

class Personas
{
    
    private $per;
    
    public function __construct()
    {
        $this-> per = array();
    }
    
    public function Getpersonas()
    {
        $sql = "select * from personas";
        $res = mysql_query($sql,coneccion::conn());
        while ($reg = mysql_fetch_assoc($res))
        {
            $this->per[]=$reg;
        }
            return $this->per;
    }
    
}











?>