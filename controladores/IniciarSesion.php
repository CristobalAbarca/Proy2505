<?php
session_start();
include '../lib/Conexion.php';
include '../dato/Usuario.php';
$oUsr = new Usuario();
$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['pass'];
if($oUsr->VerificarUsuarioContrasenna())
{
    $_SESSION["Usuario"]=$oUsr;
    header('location:http://localhost:8081/Proy2305/index.php');
}
else
{
    echo 'No existe';
    
}

