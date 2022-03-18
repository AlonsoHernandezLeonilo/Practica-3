<?php

$Host = "localhost";
$UserHost = "root";
$Password = "";
$DataBase = "practica3";

$conect = mysqli_connect($Host, $UserHost, $Password, $DataBase);
if($conect->connect_error){
    die('No hay conexión:'.$conecta->connect_error);
}
?>