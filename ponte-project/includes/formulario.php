<main>

    <section>
        <a href="../index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class='mt-3'><?=TITLE?></h2>

    <form method="post">
        <div class='form-group'>
            <label for="">Nome Fantasia</label>
            <input type="text" class="form-control" name='nomeFantasia' value="<?=$ong->nomeFantasia?>" maxlength="40">
        </div>

        <div class='form-group'>
            <label for="">Razão Social</label>
            <input type="text" class="form-control" name='razaoSocial' value="<?=$ong->razaoSocial?>" maxlength="40">
        </div>

        <div class='form-group'>
            <label for="">CNPJ</label>
            <input type="text" class="form-control" name='cnpj' value="<?=$ong->cnpj?>" minlength="14" maxlength="14">
        </div>

        <div class='form-group'>
            <label for="">Email</label>
            <input type="email" class="form-control" name='email' value="<?=$ong->email?>" maxlength="40">
        </div>

        <div class='form-group'>
            <label for="">Tipo de ONG</label>
            <div>
                <select name='tipoOng' value="<?=$ong->tipoOng?>">
                    <option value="Criancas">Crianças</option>
                    <option value="Mulheres">Mulheres</option>
                    <option value="Meio-Ambiente">Meio-Ambiente</option>
                    <option value="Refugiados">Refugiados</option>
                    <option value="Familia">Famílias Carentes</option>
                </select>
            </div>
        </div>

        <div class='form-group'>
            <label for="">Senha</label value="<?=$ong->senha?>">
            <input type="password" class="form-control" name='senha'>
        </div>

        <div class='form-group'>
            <label for="">Confirmar Senha</label>
            <input type="password" class="form-control" name='confSenha' value="<?=$ong->senha?>">
        </div>

        <div class='form-group'>
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>
