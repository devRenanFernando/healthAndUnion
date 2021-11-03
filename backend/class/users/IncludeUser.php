<?php
require_once './User.php';
require_once './UsersMySQL.php';

// Recebe os valores do form registration.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Novo Repositório
$usersMySQL = new UsersMySQL();

// Método para cadastrar usuário
$usersMySQL->registrationUser($dados);