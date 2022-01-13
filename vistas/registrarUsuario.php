<?php

     

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>registrarUsuario</title>
  </head>
  <body>
    
  <div class="container">
        <div class="m-0 vh-100 row justify-content-center align-items-center p-1">

     
            <div class="card mb-3 col-xl-5 col-sm-12 p-5" style="box-shadow: 6px 5px 5px rgb(240, 240, 240);">
                <div class="row p-2 justify-content-center">
                <div id="msj"></div>
                      <form>
                    <div class="col-md-12 ">
                        <div class="card-body mt-4 mb-4">
                            <h3 class="card-title text-primary">Registro de usuario</h3>

                            <div id="login" class="row g-3" >
                                <div class="col-md-12" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Su usuario es user">
                                    <label for="usuario" class="form-label">Ingrese nombre usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" tabindex="1">
                                    <div class="valid-usu">
                                        
                                    </div>
                                </div>

                                <div class="col-md-12" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Su password es user">
                                    <label for="password" class="form-label">Ingrese password</label>
                                    <input type="password" class="form-control" id="password" name="password" aria-describedby="validationServer03Feedback" tabindex="2">
                                    <div id="valid-password" class="invalid-feedback">
                                       
                                    </div>
                                </div>

                                <div class="col-md-12" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Su password es user">
                                    <label for="password" class="form-label">Repita password</label>
                                    <input type="password" class="form-control" id="password2" name="password2" aria-describedby="validationServer03Feedback" tabindex="3">
                                    <div id="valid-password" class="invalid-feedback">
                                       
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button id="btn_registrarse" name="btn_registrarse" class="btn btn-primary btnIngresar" type="button" tabindex="3">Registrarse</button>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                     </form>
                </div>
            </div>
           
        </div>

    </div>

    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/registarUsuario.js"></script>
  </body>
</html>