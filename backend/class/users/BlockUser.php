<?php
require_once './User.php';
require_once './UsersMySQL.php';

$idUser = $_GET['Id'];
$blockedUser = $_GET['Blocked'];

// Novo Repositório
$usersMySQL = new UsersMySQL();

// Método para cadastrar usuário
$usersMySQL->blockUser($idUser, $blockedUser);
