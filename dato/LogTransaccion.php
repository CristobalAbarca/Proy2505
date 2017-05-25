<?php
class LogTransaccion {
   var $accion;
   var $descripcion;
   var $idacceso;
   var $nomtabla;
   
   public function Agregar(){
       $oConn = new Conexion();
       
       if($oConn->Conectar())
           $db=$oConn->objconn;
       else
           return false;
       
   }
}

