<?php

require 'functions.php';

if (!empty($_POST['data_type'])) {
    $info['data_type'] = $_POST['data_type'];
    $info['errors'] = [];
    $info['success'] = false;

    if ($_POST['data_type'] == "registrarse") {
        require './controlador/controlador_registrarse.php';
    } 

    if ($_POST['data_type'] == "iniciar_sesion") {
        require './controlador/controlador_inicio.php';
    }

    // Devolver una respuesta JSON
    echo json_encode($info);
}