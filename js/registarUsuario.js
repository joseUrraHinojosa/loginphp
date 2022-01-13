$(document).ready(function () {


    $("#btn_registrarse").click(function () {
      
        //valida campos en blanco y password iguales

        if ($("#usuario").val() == ""  || $("#passwordR").val()=="" || $("#password2").val()=="") {
            alert('Debe rellenar todos los campos');
        } else {
            if ($("#password").val() == $("#password2").val()) {

                $.ajax({
                    type: 'POST',
                    url: '../controlador/registrarUsuarioController.php',
                    data: { 'usuario': $("#usuario").val(), 'password': $("#password").val(), 'password2': $("#password2").val()  },
                    success: function (response) {
                        //const datos = JSON.parse(response);
                         if(response == "registro ok"){
                            $("body").html("<div style='text-align:center'>¡Usuario registrado con éxito!<br><a href='../index.php'>iniciar sesión</a> </div>")
                         }
                       
                    }

                });

            } else {
                alert('Password no son iguales');
            }
        }




    })

})