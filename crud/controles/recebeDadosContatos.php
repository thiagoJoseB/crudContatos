<?php


require_once('../funcoes/config.php');

$nome = (string) null;
$email = (string) null;
$numeroCelular = (string) null;


    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $numeroCelular = md5( $_POST['txtNumeroCelular']);








?>