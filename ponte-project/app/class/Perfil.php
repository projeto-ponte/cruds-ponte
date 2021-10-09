<?php

Class Perfil
{
    private $idPerfil;
    private $idUsuario;
    private $foto_perfil;
    private $foto_capa;
    private $descricao;
    private $publicacoes;

    public function criaPerfil()
    {
        echo "O perfil é criado";
    }

    public function editaPerfil()
    {
        echo "O perfil é editado";
    }

    public function excluiPerfil()
    {
        echo "Exclui o perfil";
    }
}

?>
