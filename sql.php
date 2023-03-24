<?php
include_once "./includes/includes.php";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$ajudar = $_REQUEST['ajudar'];


$sql = "INSERT INTO usuarios (nome, email, telefone, ajudar) VALUES ('$nome', '$email', '$telefone', '$ajudar') ";
