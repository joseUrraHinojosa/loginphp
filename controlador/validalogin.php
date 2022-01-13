<?php
include "../recursos/loginModel.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$valido = false;

//validación campos vacios
if ($usuario == "" && $password == "") {

    $array = array("usuario" => "Debe ingresar credenciales");
    $json = json_encode($array);
    echo $json;
} else {

    validaUsu($usuario, $password);


    if ($valido) {
        $array = array("usuario" => "valido");
        $json = json_encode($array);
        echo $json;
    } else {
        //$_SESSION['usuario'] ="logueado";
        $array = array("usuario" => "invalido");
        $json = json_encode($array);
        echo $json;
    }
}


//funcion valida usuario
function validaUsu($u, $p)
{
    $login = new login_model();
    $listaUsuarios = $login->getUsuarios();
    $usu = false;
    $pass = false;
    foreach ($listaUsuarios as $actual) {

        if ($u == $actual) {
            $usu = true;
        }
        if (password_verify($p, $actual)) {
            $pass = true;
        }
        if ($usu == true && $pass == true) {
            $GLOBALS['valido'] = true;
        }
    }
}
?>