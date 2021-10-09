<?php

Class Documento
{
    private $idDocumento;
    private $idUsuario;
    private $documento1;
    private $documento2;

    public function enviaDocumento()
    {
        echo "O documento é enviado";
    }

    public function excluiDocumento()
    {
        echo "O documento é excluido";
    }
}

?>