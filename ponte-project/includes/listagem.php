<?php

    $resultados = '';
    foreach($ongs as $ong){
        $resultados .= '<tr>
                            <td>'.$ong->idUsuario.'</td>
                            <td>'.$ong->razaoSocial.'</td>
                            <td>'.$ong->nomeFantasia.'</td>
                            <td>'.$ong->tipoOng.'</td>
                            <td>'.$ong->email.'</td>
                            <td>
                                <a href="ong/editar.php?id='.$ong->idUsuario.'">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>

                                <a href="ong/excluir.php?id='.$ong->idUsuario.'">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>';
                            
    }

?>

<main>

    <section>
        <a href="ong\cadastrar.php">
            <button class="btn btn-success">Nova ONG</button>
        </a>
    </section>

    <section>
        <table class='table bg-light mt-3'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Razão Social</th>
                    <th>Nome Fantasia</th>
                    <th>Tipo</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>

</main>