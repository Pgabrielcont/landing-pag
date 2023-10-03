<?php 
//arquivo para fazer a conexão com o banco  de dados
$hostName = "localhost";
$dataBase = "form";
$user = "root";
$password = "";
$mysqli = new mysqli ($hostName, $user, $password,  $dataBase);

// if de verifição da conexão
if ($mysqli -> connect_errno) {
    echo "Falha ao conectar: (" .$mysqli -> connect_errno .") " .$mysqli ->connect_errno;
} else {
    echo "Formulário enviado com sucesso";
}

?>
