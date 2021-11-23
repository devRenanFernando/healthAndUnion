<?php
require_once './User.php';
require_once './UsersMySQL.php';

// Recebe os valores do form registration.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Novo Repositório
$usersMySQL = new UsersMySQL();
$new_photo = '';

if (!empty($_FILES['inputFile']['name'])) {
    $photo = $_FILES['inputFile']['name'];

    $extension = strtolower(pathinfo($photo, PATHINFO_EXTENSION));

    $new_photo = md5(time()) . "." . $extension;

    $directory = "../../../frontend/assets/upload/";

    move_uploaded_file($_FILES['inputFile']['tmp_name'], $directory . $new_photo);
}

function limpar_texto($str)
{
    return preg_replace("/[^0-9]/", "", $str);
}

$new_phone = limpar_texto($dados['inputPhone']);
$new_birth = limpar_texto($dados['inputBirth']);
$new_name = ucwords($dados['inputName']);

$dados['inputName'] = $new_name;
$dados['inputBirth'] = $new_birth;
$dados['inputPhone'] = $new_phone;

// Método para cadastrar usuário
$usersMySQL->updateUser($dados, $new_photo);
