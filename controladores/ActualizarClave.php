<?php
   include '../constantes.php';
   include '../librerias.php';
?>
<?php
        $nomusuario=$_POST['nomusuario'];
        $passAntigua = $_POST['passAntigua'];
        $passNueva = $_POST['passNueva'];
        $passConfirma = $_POST['passConfirma'];
        
        if ($passNueva!=$passConfirma){
            echo "Las claves no son iguales";
            return; 
        }
        $oUsr=new Usuario();
        $oUsr->nombre=$nomusuario;
        $oUsr->clave=$passAntigua;
                
        if(!$oUsr->VerificaUsuarioClave()){
           echo "El usuario o clave antigua no corresponde";
           return; 
        }
        
        echo "Estamos listos para el cambio"
?>