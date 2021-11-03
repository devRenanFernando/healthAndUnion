<?php
require_once "../backend/class/users/UsersMySQL.php";

// Novo Repositório
$usersMySQL = new UsersMySQL();

$usersMySQL->usersView();

?>