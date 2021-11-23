<?php
require_once './PostsMySQL.php';
require_once "../../../vendor/autoload.php";
require_once "../../../helpers/whoops.php";

// Recebe os valores do form registration.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Novo Repositório
$postsMySQL = new PostsMySQL();
$new_photo = '';

if (!empty($_FILES['inputFile']['name'])) {
    $photo = $_FILES['inputFile']['name'];

    $extension = strtolower(pathinfo($photo, PATHINFO_EXTENSION));

    $new_photo = md5(time()) . "." . $extension;

    $directory = "../../../frontend/assets/upload/";

    move_uploaded_file($_FILES['inputFile']['tmp_name'], $directory . $new_photo);
}

// Método para atualizar post
$postsMySQL->updatePost($dados, $new_photo, $_GET['Id']);
