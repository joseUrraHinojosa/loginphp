<?php
include "../recursos/loginModel.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$valido = false;

$encriptar = password_hash($password,PASSWORD_DEFAULT);


if(!empty($_POST)){

     $login = new login_model();
     $listaUsuarios = $login->setUsuario($usuario,$encriptar);
     echo "registro ok";

}else{
    header("location: ../index.php");
}


  


?>