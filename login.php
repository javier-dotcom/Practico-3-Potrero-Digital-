<?php
$contraseña=$_POST["con"];
$usuario=$_POST["usu"];
$contraseñacorrecta="backend";
$usuariocorrecto="potrero";


if($contraseña==$contraseñacorrecta && $usuario==$usuariocorrecto){

header("Location:https://github.com/javier-dotcom/Practico-1-Potrero-Digital");

}else{


header("Location:error.php");

}


?>