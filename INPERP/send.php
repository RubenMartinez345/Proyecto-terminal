<?php

include("conexion.php");

if(isset($_POST['send'])){
    if(
        strlen($_POST('USUARIO')) >= 1 &&
        strlen($_POST('CONTRASEÑA')) >= 1
    ){
     $USUARIO=trim($_POST('USUARIO'));
     $CONTRASEÑA=trim($_POST('CONTRASEÑA'));
     $CONSULTA=" INSER INTO datos(USUARIO,CONTRASEÑA) 
     VALUES ('$USUARIO ', '$CONTRASEÑA') ";
     $resultado=mysqli_query($conex,$consulta);   
    }
}

?>
