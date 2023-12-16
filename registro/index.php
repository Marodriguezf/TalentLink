<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            <a href="vacantes.php""><i class="iconos fa-solid fa-briefcase" name="vacante-icon"></i>Vacantes</a>
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

    <!-- Menu -->

    <div class="menu">
        <div class="cabecera-menu">
            <i class="icono fa-solid fa-bars" name="menu-icono"></i>
            <div class="buscar">
                <input type="text" placeholder="Buscar">
                <button class="btn-buscar"><i class="fa-solid fa-magnifying-glass" name="buscador-icon"></i></button>
            </div>
        </div>
        <div class="vacantes">
            <h1>Vacantes</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vacantes Abiertas<i class="icono-abierto fa-solid fa-lock-open"></i></h5>
                            <h2 class="card-subtitle mb-2">3</h2>
                            <p class="card-text">13-12-2023</p>
                            <a href="vacantes.php" class="card-link">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vacantes Cerradas<i class="icono-cerrado fa-solid fa-lock"></i></h5>
                            <h2 class="card-subtitle mb-2">3</h2>
                            <p class="card-text">13-12-2023</p><a href="#" class="card-link">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vacantes en pausa<i class="icono-pausa fa-solid fa-circle-pause"></i></h5>
                            <h2 class="card-subtitle mb-2">1</h2>
                            <p class="card-text">13-12-2023</p><a href="#" class="card-link">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="candidatos">
            <h1>Candidatos</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nuevos Candidatos<i class="nuevo-candidato fa-solid fa-user"></i></h5>
                            <h2 class="card-subtitle mb-2">3</h2>
                            <p class="card-text">13-12-2023</p>
                            <a href="#" class="card-link">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Candidatos Contratados<i class=" candidato-contratado fa-solid fa-user-check"></i></h5>
                            <h2 class="card-subtitle mb-2">2</h2>
                            <p class="card-text">13-12-2023</p><a href="#" class="card-link">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Candidatos Descartados<i class=" candidato-descartado fa-solid fa-user-xmark"></i></h5>
                            <h2 class="card-subtitle mb-2">1</h2>
                            <p class="card-text">13-12-2023</p><a href="#" class="card-link">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>