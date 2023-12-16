<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analista contable</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./estilos/estilosVacantes.css">

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

    <!-- Menu -->

    <div class="menu">
        <div class="cabecera-menu">
            <i class="icono fa-solid fa-bars" name="menu-icono"></i>
            <div class="buscar">
                <input type="text" placeholder="Buscar">
                <button class="btn-buscar"><i class="fa-solid fa-magnifying-glass" name="buscador-icon"></i></button>
            </div>
        </div>
        <div class="filter-wrapper">
            <p>Categorias</p>
            <div class="filtro">
                <a href="vacantes.php">
                    <button class="btn-filtro">Abiertas</button>
                </a>
                <a href="vacantes_cerradas.php">
                    <button class="btn-filtro">Cerradas</button>
                </a>
                <a href="vacantes_pausa.php">
                    <button class="btn-filtro">En pausa</button>
                </a>
            </div>
        </div>
        <!--  <div class="ordenar">
            <p>ordenar</p>
            <div class="ordenar-lista">
                <select>
                    <option value="0">Todos</option>
                    <option value="1">Nuevos</option>
                    <option value="2">Antiguos</option>
                </select>
            </div>
        </div>  -->
        <div class="wrapper">
            <div class="card">
                <div class="card-left">
                    <img src="./imagenes/logo.png">
                </div>
                <div class="card-center">
                    <h3>Analista Contable</h3>
                    <p class="card-detail">Bogotá</p>
                    <div class="card-sub">
                        <p class="card-loc"><i class="location fa-solid fa-location-pin"
                                name="location-icon"></i>Presencial</p>
                        <p><i class="time fa-regular fa-clock" name="time-icon"></i>Full time</p>
                        <p><i class="people fa-solid fa-user" name="people-icon"></i>5 aplicaciones</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Area</h5>
                        <a href="#">Contabilidad</a>
                    </div>
                    <div class="card-salary">
                        <p><b>$1M</b><b>/Mes</b></p>
                    </div>
                    <div class="link">
                        <a href="vacante1.php">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="card">
                <div class="card-left">
                    <img src="./imagenes/logo.png">
                </div>
                <div class="card-center">
                    <h3>Auxiliar Soporte Sistemas</h3>
                    <p class="card-detail">Bogotá</p>
                    <div class="card-sub">
                        <p class="card-loc"><i class="location fa-solid fa-location-pin"
                                name="location-icon"></i>Presencial</p>
                        <p><i class="time fa-regular fa-clock" name="time-icon"></i>Full time</p>
                        <p><i class="people fa-solid fa-user" name="people-icon"></i>3 aplicaciones</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Area</h5>
                        <a href="#">Sistemas</a>
                    </div>
                    <div class="card-salary">
                        <p><b>$1M</b><b>/Mes</b></p>
                    </div>
                    <div class="link">
                        <a href="vacante2.php">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="card">
                <div class="card-left">
                    <img src="./imagenes/logo.png">
                </div>
                <div class="card-center">
                    <h3>Asistente Administrativo</h3>
                    <p class="card-detail">Bogotá</p>
                    <div class="card-sub">
                        <p class="card-loc"><i class="location fa-solid fa-location-pin"
                                name="location-icon"></i>Presencial</p>
                        <p><i class="time fa-regular fa-clock" name="time-icon"></i>Full time</p>
                        <p><i class="people fa-solid fa-user" name="people-icon"></i> 6 aplicaciones</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Area</h5>
                        <a href="#">Administrativa</a>
                    </div>
                    <div class="card-salary">
                        <p><b>$1.5M</b><b>/Mes</b></p>
                    </div>
                    <div class="link">
                        <a href="vacante3.php">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="app.js"></script>

</html>