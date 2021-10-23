<?php
session_start();
ob_start();
unset(
    $_SESSION['Id'],
    $_SESSION['Name'],
    $_SESSION['Email'],
    $_SESSION['Phone'],
    $_SESSION['Birth'],
    $_SESSION['Occupation'],
    $_SESSION['Photo'],
    $_SESSION['Type'],
    $_SESSION['Blocked']
);
$_SESSION['msg'] = "<p style:'color: green';>Deslogado com sucesso!</p>";
header("Location: ../../../app/index.php");
