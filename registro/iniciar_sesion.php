<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio De Sesión</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet" href="./estilos/estilosInicio_sesion.css">

    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/1c7ea47b2b.js" crossorigin="anonymous"></script>


</head>

<body>

    <!-- Imagen -->
    <section class="seccion1">
        <div class="container py-5">
            <div class="img row py-5 justify-content-between">
                <div class="col-md-6">
                    <div class="imagen">
                        <img src="./imagenes/registro.jpg" alt="">
                    </div>
                </div>

                <!-- Fromulario de Registro Usuario -->
                
                    <div class="formulario col-md-6">
                        <form class="form" method="post" onsubmit="myaction.collect_data(event, 'iniciar_sesion')">
                            <div class="titulo">
                                <h1> <strong>¡Bienvenido de Nuevo!</strong></h1>
                            </div>
                            <div class="contenido mt-2">
                                <div class="encabezado"></div>
                                <label for="correo"> Correo</label>
                                <input type="text" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="contenido mt-2">
                                <div class="encabezado"></div>
                                <label for="password"> Contraseña</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="contenido mt-3 d-flex">
                                <input type="checkbox" name="recordar" id="recordar" class="mr-3"><label for="recordar"
                                    style="color: #FF9800; margin-left:5px;"> Recordar</label>
                                <a style="color: #FF9800; margin-left:95px;" href="olvidaste_contrasena.php"
                                    class="ml-auto">¿Olvidaste tu contraseña?</a>

                            </div>

                            <button class="btn btn-primary col-12 mt-3"> Ingresar </button>
                            <div class="m-3">
                                ¿No tienes una cuenta? <a href="registrarse.php">Registrate aquí</a>
                            </div>

                        </form>
                    </div>
                



            </div>
        </div>



    </section>


    <!-- Javascript -->
    <script>
    var myaction = {
        collect_data: function (e, data_type) {
            e.preventDefault();
            e.stopPropagation();

            var inputs = document.querySelectorAll("form input, form select");
            let myform = new FormData();
            myform.append('data_type', data_type);

            for (var i = 0; i < inputs.length; i++) {
                myform.append(inputs[i].name, inputs[i].value);
            }

            myaction.send_data(myform);
        },

        send_data: function (form) {
            var ajax = new XMLHttpRequest();

            ajax.addEventListener('readystatechange', function () {
                if (ajax.readyState == 4) {
                    if (ajax.status == 200) {
                        // all good
                        myaction.handle_result(ajax.responseText);
                    } else {
                        console.log(ajax);
                        alert("Ha ocurrido un error");
                    }
                }
            });

            ajax.open('post', 'ajax.php', true);
            ajax.send(form);
        },

        handle_result: function (result) {
            console.log(result);
            var obj = JSON.parse(result);
            if (obj.success) {
                alert("Ingreso exitoso");
                window.location.href = 'index.php';
            } else {
                // show errors
                let error_inputs = document.querySelectorAll(".js-error");

                // empty all errors
                for (var i = 0; i < error_inputs.length; i++) {
                    error_inputs[i].innerHTML = "";
                }

                // display errors
                for (key in obj.errors) {
                    document.querySelector(".js-error-" + key).innerHTML = obj.errors[key];
                }
            }
        }
    };
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>