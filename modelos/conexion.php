<?php
     class conexion
     {
         
         static public function conectar(){
             $con = new PDO("mysql:host=localhost;dbname=portalcime","root","");
             $con->exec("set names utf8");
             return $con;
         }
     }