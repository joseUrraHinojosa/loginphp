$(document).ready(function () {


    $('#btn_login').click(function () {
        if ($("#usuario").val() == "" || $("#password").val() == "") {
                alert("Debe ingresar usuario y password");
        } else {
            $.ajax({
                type: 'POST',
                url: 'controlador/validalogin.php',
                data: { 'usuario': $("#usuario").val(), 'password': $("#password").val() },
                success: function (response) {
                    const datos = JSON.parse(response);

                    if (datos.usuario == "invalido") {
                        alert("Usuario o password incorrecto");
                    } else if (datos.usuario == "valido") {
                        window.location.href = "vistas/inicio.php";
                    }
                }

            });
        }


    })

})