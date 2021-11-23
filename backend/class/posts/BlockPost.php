<?php
require_once './PostsMySQL.php';

$idPost = $_GET['IdPost'];
$blockedPost = $_GET['BlockedPost'];

// Novo Repositório
$postsMySQL = new postsMySQL();

// Método para cadastrar usuário
$postsMySQL->blockPost($idPost, $blockedPost);
