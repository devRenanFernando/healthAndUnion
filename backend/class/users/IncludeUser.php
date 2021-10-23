<?php
require_once './User.php';
require_once './UsersMySQL.php';

// Recebe os valores do form registration.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Novo Repositório
$usersMySQL = new UsersMySQL();

// Método para cadastrar usuário
$usersMySQL->registrationUser($dados);








// TODO ESSE CÓDIGO A BAIXO É SOBRE OUTRA COISA, DESCONSIDERE!!!

// if (isset($_FILES['photo'])) {
//     $photo = $_FILES['photo']['name'];
//     $extension = strtolower(pathinfo($photo, PATHINFO_EXTENSION));

//     $new_photo = md5(time() . "." . $extension);

//     $directory = "../../../img/upload/";

//     move_uploaded_file($_FILES['photo']['tmp_name'], $directory . $new_photo);
// }

// function limpar_texto($str)
// {
//     return preg_replace("/[^0-9]/", "", $str);
// }
// $new_phone = limpar_texto($_POST['phone']);

// $lines = $usersMySQL->validationEmail($_POST['inputEmail']);

// if ($lines > 0) {
//     $mensagem = "<p> Usuário já cadastrado... </p>";
// } else {
//     $mensagem = "<p> Usuário cadastrado com sucesso! </p>";
// }

// $_SESSION['mensagem'] = $mensagem;
