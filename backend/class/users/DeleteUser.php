<?php
require_once './User.php';
require_once './UsersMySQL.php';

$idUser = $_GET['Id'];

// Novo Repositório
$usersMySQL = new UsersMySQL();

// Método para cadastrar usuário
$usersMySQL->deleteUser($idUser);
