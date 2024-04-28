<?php

/**
 * Activa el registro de usuario
 * Autor: Marco Robles
 * Web: https://github.com/mroblesdev
 */

require '../config/config.php';

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'admin') {
    header('Location: ../index.php');
    exit;
}

$db = new Database();
$con = $db->conectar();

$id = $_POST['id'];

$sql = $con->prepare("UPDATE usuarios SET activacion=1 WHERE id=?");
$sql->execute([$id]);

header('Location: index.php');
