<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Questão</h3>
            
            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/produto/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="cabecarioQuestao">Cabecalho da questão</label>
                    <input type="text" class="form-control"  name="cabecarioQuestao" placeholder="Cabecalho da questão" value="<?php echo $Sessao::retornaValorFormulario('cabecarioQuestao'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="preco">Tipo Questão</label>
                    <input type="text" class="form-control" name="preco" placeholder="tipo questão" value="<?php echo $Sessao::retornaValorFormulario('tipoQuestao'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="preco">Primeira Alternativa</label>
                    <input type="text" class="form-control" name="preco" placeholder="alternativa 1" value="<?php echo $Sessao::retornaValorFormulario('alternativa1'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="preco">Segunda Alternativa</label>
                    <input type="text" class="form-control" name="preco" placeholder="alternativa 2" value="<?php echo $Sessao::retornaValorFormulario('alternativa2'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="preco">Terceira Alternativa</label>
                    <input type="text" class="form-control" name="preco" placeholder="alternativa 3" value="<?php echo $Sessao::retornaValorFormulario('alternativa3'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="preco">Quarta Alternativa</label>
                    <input type="text" class="form-control" name="preco" placeholder="alternativa 4" value="<?php echo $Sessao::retornaValorFormulario('alternativa4'); ?>" required>
                </div>
               
                <div class="form-group">
                    <label for="preco">Resposta Questão</label>
                    <input type="text" class="form-control" name="preco" placeholder="Ex = A" value="<?php echo $Sessao::retornaValorFormulario('respostaQuestao'); ?>" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>