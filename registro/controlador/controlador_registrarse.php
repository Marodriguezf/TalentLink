<?php

// Validaciones

// Validar nombre
if (empty($_POST['nombre'])) {
    $info['errors']['nombre'] = "Se requiere un Nombre";
} else 
if (!preg_match(" /^[\p{L}\s]+$/u ", $_POST['nombre'])) {
    $info['errors']['nombre'] = "El nombre solo puede tener letras, no se permiten caracteres especiales o números";
}

// Validar apellido
if (empty($_POST['cargo'])) {
    $info['errors']['cargo'] = "Se requiere un cargo";
} else 
if (!preg_match("/^[\p{L}\s]+$/u ", $_POST['cargo'])) {
    $info['errors']['cargo'] = "Elcargo solo puede tener letras, no se permiten caracteres especiales o números";
}

// Validar correo
if (empty($_POST['correo'])) {
    $info['errors']['correo'] = "Se requiere un correo";
} else if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
    $info['errors']['correo'] = "El correo no es válido";
}

// Validar password
if (empty($_POST['password'])) {
    $info['errors']['password'] = "Se requiere un password";
} else if ($_POST['password'] !== $_POST['confirmar_password']) {
    $info['errors']['password'] = "El password no coincide";
} else if (strlen($_POST['password']) < 8) {
    $info['errors']['password'] = "El password debe tener al menos 8 caracteres";
}

if (empty($info['errors'])) {

    // guardar en la base de datos
    $arr = [];
    $arr['nombre'] = $_POST['nombre'];
    $arr['cargo'] = $_POST['cargo'];
    $arr['correo'] = $_POST['correo'];
    $arr['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);


    db_query("insert into registro (nombre,cargo, correo, password) values(:nombre,:cargo, :correo, :password)", $arr);

    $info['success'] = true;
}
