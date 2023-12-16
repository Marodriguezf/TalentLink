<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vacante</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./estilos/estilosIndex.css">

    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/1c7ea47b2b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Menu lateral -->
    <div class="sidebar">
        <h1 class="logo">TalentLink</h1>
        <!--Perfil-->
        <div class="perfil">
            <img class="foto_perfil" src="./imagenes/fotoperfil.jpg">
            <div class="nombre_perfil">
                <h4>Juan Ramirez</h4>
                <p>Profesional de Selección</p>
            </div>

        </div>
        <div class="menus">
            <p>General</p>
            <a href="index.php"><i class="iconos fa-solid fa-grip" name="dashboard-icon"></i>Dashboard</a>
            <a href="vacantes.php""><i class=" iconos fa-solid fa-briefcase" name="vacante-icon"></i>Vacantes</a>
            <a href="index.php"><i class="iconos fa-solid fa-user" name="candidato-icon"></i>Candidatos</a>
            <p>Acciones</p>
            <a href="index.php"><i class="iconos fa-solid fa-circle-plus" name="crear-icon"></i>Crear una vacante</a>
            <a href="index.php"><i class="iconos fa-solid fa-user-plus" name="registrar-icon"></i>Registrar
                Candidato</a>
            <p>Soporte</p>
            <a href="index.php"><i class="iconos fa-solid fa-gear" name="setting-icon"></i>Configuración</a>
            <a href="index.php"><i class="iconos fa-solid fa-circle-info" name="help-icon"></i>Soporte</a>
        </div>
    </div>

    <form class="formulario" method="post">
        <div class="crear col-md-8 col-lg-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2" style="color: #080F56;">Crear Vacante</div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input name="nombre" type="text" class="form-control" placeholder="Titulo">
            </div>
            <div><small class="js-error js-error-nombre text-danger"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-building"></i></span>
                <input name="apellido" type="text" class="form-control" placeholder="Departamento">
            </div>
            <div><small class="js-error js-error-apellido text-danger"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input name="correo" type="text" class="form-control" placeholder="Jefe Inmediato">
            </div>
            <div><small class="js-error js-error-correo text-danger"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-money-bill"></i></span>
                <input name="date" type="number" class="form-control" placeholder="Salario">
            </div>
            <div><small class="js-error js-error-password text-danger"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                <input name="documento" type="text" class="form-control" placeholder="Descripción">
            </div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-graduation-cap"></i></span>
                <input name="documento" type="text" class="form-control" placeholder="Requisitos">
            </div>
           
      
            <button class="mt-3 btn btn-primary col-12"
                style="background-color: #ff7300; border-color: #ff7300;">Crear Vacante</button>

        </div>
    </form>


    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>