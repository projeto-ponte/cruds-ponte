<?php

Class Usuario
{
    private $idUsuario;
    private $senha;
    private $email;
    private $cnpj;
    private $nomeFantasia;
    private $razaoSocial;
    private $comprovantes;
    private $tipoOng;

    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        global $msgErro;

        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,
            $usuario,$senha); 
        } catch(PDOException $e){
            $msgErro = $e->getMessage();
        }

        
    }

    public function criaCadastro($cnpj,$email,$senha,$nomeFantasia,$razaoSocial,$tipoOng)
    {
        global $pdo;
        //verificar se já existe email cadastrado
        $sql = $pdo->prepare("SELECT nomeFantasia FROM usuario
            WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; //Já está cadastrada
        }
        else{
            //Caso não, cadastrar
            $sql = $pdo->prepare("INSERT INTO usuarios (cnpj,email,senha,nomeFantasia,razaoSocial,tipoOng)
                VALUES (:c, :e, :s, :nf, :rs, :tp)");

            $sql->bindValue(":c",$cnpj);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->bindValue(":nf",$nomeFantasia);
            $sql->bindValue(":rs",$razaoSocial);
            $sql->bindValue(":tp",$tipoOng);
            $sql->execute();
            return true;
        }      
    }

    public function login(){
        echo "Usuario faz o login";
    }

    public function editaCadastro(){
        echo "Usuario edita o cadastro";
    }

    public function excluiCadastro(){
        echo "Usuario exclui o cadastro";
    }
}

?>