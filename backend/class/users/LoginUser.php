<?php
require_once './User.php';
require_once './UsersMySQL.php';

// Recebe os valores do form login.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// echo "<pre>";
// print_r($dados);
// echo "</pre>";
// exit;

// Novo Repositório
$usersMySQL = new UsersMySQL();

// Método para logar/entrar
$usersMySQL->loginUser($dados);