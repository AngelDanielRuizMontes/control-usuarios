<?php
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (($usuario == 'angel') && ($password == '123456')) {
    //Contraseña correcta
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php");
} else{
    //contraseña incorrecta
    $_SESSION['error'] = "Usuario o contraseña incorrecto.
    Vuelva a intentarlo";
    header("Location: login-form.php");

}