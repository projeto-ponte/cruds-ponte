<?php

require('/xampp/htdocs/ponte-project/vendor/autoload.php');


define('TITLE','Cadastrar Vaga');

use \App\Entity\Usuario;
$ong = new Usuario;

if(isset($_POST['nomeFantasia']))
{
    $ong->nomeFantasia = addslashes($_POST["nomeFantasia"]);
    $ong->razaoSocial = addslashes($_POST["razaoSocial"]);
    $ong->cnpj = addslashes($_POST["cnpj"]);
    $ong->email = addslashes($_POST["email"]);
    $ong->senha = addslashes($_POST["senha"]);  
    $confSenha = addslashes($_POST["confSenha"]);
    $ong->tipoOng = addslashes($_POST["tipoOng"]);

    if(!empty($ong->nomeFantasia) && !empty($ong->razaoSocial) && !empty($ong->cnpj) && !empty($ong->email) && !empty($ong->senha) && !empty($confSenha)){
        if($ong->senha == $confSenha){
            $ong->criaCadastro($ong->cnpj,$ong->email,$ong->senha,$ong->nomeFantasia,$ong->razaoSocial,$ong->tipoOng);      
            header('location: ../index.php?status=sucess');
            exit;
        }else{  
            echo "<script>alert('Utilize o mesmo valor nos campos de definição de senha')</script>";
        }
    }else{
        echo "<script>alert('Preencha todos os campos do formulário')</script>";
    }

    //echo "<pre>"; print_r($ong); echo "</pre>"; exit;
}

include('../includes/header.php');
include('../includes/formulario.php');
include('../includes/footer.php');