<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;
use \PDOException;


Class Usuario
{
    public $idUsuario;
    public $senha;
    public $email;
    public $cnpj;
    public $nomeFantasia;
    public $razaoSocial;
    public $comprovantes;
    public $tipoOng;

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
        $obDatabase = new Database("usuario");
        $this->id = $obDatabase->insert([
            'nomeFantasia' => $this->nomeFantasia,
            'razaoSocial' => $this->razaoSocial,
            'cnpj' => $this->cnpj,
            'tipoOng' => $this->tipoOng,
            'email' => $this->email,
            'senha' => $this->senha 
        ]);

        return true;
        
    }

    public function atualizaCadastro()
    {
         return(new Database('usuario'))->update('idUsuario = '.$this->idUsuario,[
            'nomeFantasia' => $this->nomeFantasia,
            'razaoSocial' => $this->razaoSocial,
            'tipoOng' => $this->tipoOng,
            'email' => $this->email,
            'senha' => $this->senha 
         ]);
        return true;
        
    }

    public function excluiCadastro()
    {
        return(new Database('usuario'))->delete('idUsuario = '.$this->idUsuario);
    }

    public static function getUsuarios($where = null, $order = null, $limit = null){
        return(new Database('usuario'))->select($where,$order,$limit)
                                         ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getUsuario($id){
        return(new Database('usuario'))->select('idUsuario = '.$id)
                                        ->fetchObject(self::class);
    }

    public static function login($email, $senha){
        return(new Database('usuario'))->select('email = '.$email, 'senha = '.$senha)
                                        ->fetchObject(self::class);
    }

}

?>