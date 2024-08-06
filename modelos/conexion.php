<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;port=3306;dbname=php_avanzado_494", 
                            "root",
                            ""); 
        $link->exec("set names utf8");

        return $link;
    }
}
