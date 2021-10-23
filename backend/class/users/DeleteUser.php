<?php

session_start();
require_once '../UsersMySQL.php';

$UserMySQL = new UsersMySQL();

$id_user = $_GET['Id'];

echo $id_user;

$line = $UserMySQL->deleteUser($id_user);

if(!$line){
    $mensage = "Usuário excluído!!!";
} else {
    $message = "Erro de Exclusão!!!";
}

$_SESSION['mensage'] = $mensage;
header("Location: ../../../app/index.php");