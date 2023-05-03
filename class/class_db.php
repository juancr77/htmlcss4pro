<?php
//clase conexion
if(class_exists("class_db")!=true){
    class class_db{
        var $db_conn;
        var $db_name;
        var $db_query;

        function __construct(){
            $this ->set_db("localhost","root,","curriculum")
        }

        fuction __destruct(){
            $this -> close_db();
        }

        fuction set_db($host,$user,$passwd,$db){
            if (!isset($this ->db_conn)){
$this ->db_conn=mysqli_connect($host,$user,$passwd,$db);
$this-> db_name=$db;
            }

if(!$this ->db_con){
    echo "Error: No se pudo conectar a MySql" .php_eol;
    echo "Numero de Error: " .mysqli_cpnnect_errno().php_eol;
    echo "Descripcion Error: " .mysqli_cpnnect_error().php_eol;
    exit;
}

        }

        function close_db(){
            if(isset($db_con)){
                mysqli_close($db_conn)
            }
        }

        function set_sql($sql){
            $this -> db_query=$sql;
        }
    }
}
?>