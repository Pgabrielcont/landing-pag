<?php

require_once("conect.php");

//dados que vão entrar no banco de dados
$name = $_POST['name'];
$email = $_POST['email'];
$sexo = $_POST ['sexo'];
$telefone = $_POST['telefone'];
$mensagem = $_POST ['mensagem'];


$sql = "INSERT INTO register (name, email, sexo, telefone, mensagem) VALUES ('$name' , '$email' , '$sexo', '$telefone' , '$mensagem')";
$result = $mysqli->query($sql);
