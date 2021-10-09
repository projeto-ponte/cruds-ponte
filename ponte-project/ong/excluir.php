<?php

//require __DIR__ .'/vendor/autoload.php';
require('../vendor/autoload.php');

use \App\Entity\Usuario;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ../index.php?status=error');
    exit;
}

$ong = Usuario::getUsuario($_GET['id']); 


if(!$ong instanceof Usuario){
    header('location: ../index.php?status=error');
}

//Validação do POST 
if(isset($_POST['excluir']))
{
    $ong->excluiCadastro();

    header('location: ../index.php?status=sucess');
    exit;

    
}
//echo "<pre>"; print_r($ong); echo "</pre>"; exit;

include('../includes/header.php');
include('../includes/confirmar.php');
include('../includes/footer.php');