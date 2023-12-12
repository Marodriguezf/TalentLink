<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Usuario</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet" href="./estilos/estilosRegistro.css">

    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/1c7ea47b2b.js" crossorigin="anonymous"></script>


</head>

<body>
    <!-- Fromulario de Registro Usuario -->
    <!-- Imagen -->
    <section class="seccion1">
        <div class="container py-5">
            <div class="img row py-5 justify-content-between">
                <div class="col-md-6">
                    <div class="imagen">
                        <img src="./imagenes/registro.jpg" alt="">
                    </div>
                </div>

    <!-- Formulario -->

                <div class="formulario col-md-6">
                    <form class="form" method="post">
                        <div class="titulo">
                            <h1>Crea tu cuenta</h1>
                        </div>
                        <div class="parrafo">
                            <p style="color: #FF9800;"> <strong> Estas a un paso de automatizar tu proceso de selección</strong></p>
                        </div>
                        <div class="contenido mt-2">
                            <div class="encabezado"></div>
                            <label for="nombre"> Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="contenido mt-2">
                            <div class="encabezado"></div>
                            <label for="cargo"> Cargo</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" required>
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

                        <button class="btn btn-primary col-12 mt-3"> Crear Cuenta</button>
                        <div class="m-3">
                            ¿Ya tienes una cuenta? <a href="inicio_sesion.php">Inicia Sesión aqui</a>
                        </div>

                    </form>
                </div>




            </div>
        </div>



    </section>


    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>