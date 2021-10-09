<?php

Class Publicacao
{
    private $idPublicacao;
    private $idPerfil;
    private $data_hora;
    private $descricao;
    private $arquivos;

    public function criaPublicacao()
    {
        echo "Publicação Criada";
    }

    public function editaPublicacao()
    {
        echo "Edita Publicação";
    }

    public function excluiPublicacao()
    {
        echo "Exclui Publicação";
    }

}

?>

- idPublicacao: INT
- idPerfil: INT
- data_hora: DateTime
- descricao: String
- arquivos: String