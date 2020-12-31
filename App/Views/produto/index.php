<div class="container">
    <div class="row">
    <br>
    <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/produto/cadastro" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php if($Sessao::retornaMensagem()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $Sessao::retornaMensagem(); ?>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listaProdutos'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum produto encontrado</div>
        <?php
            } else {
        ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="info">Cabeçalho</td>
                        <td class="info">Tipo</td>
                        <td class="info">Alternativa 1</td>
                        <td class="info">Alternativa 2</td>
                        <td class="info">Alternativa 3</td>
                        <td class="info">Alternativa 4</td>
                        <td class="info">Resposta Questão</td>
                        <td class="info"></td>
                    </tr>
                    <?php
                        foreach($viewVar['listaProdutos'] as $questao) {
                    ?>
                        <tr>
                            <td><?php echo $questao->getCabecarioQuestao(); ?></td>
                            <td> <?php echo$questao->getTipoQuestao(); ?></td>
                            <td><?php echo $questao->getAlternativa1(); ?></td>
                            <td><?php echo $questao->getAlternativa2(); ?></td>
                            <td><?php echo $questao->getAlternativa3(); ?></td>
                            <td><?php echo $questao->getAlternativa4(); ?></td>
                            <td><?php echo $questao->getRespostaQuestao(); ?></td>
                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/produto/edicao/<?php echo $questao->getIdQuestao(); ?>" class="btn btn-info btn-sm">Editar</a>
                                <a href="http://<?php echo APP_HOST; ?>/produto/exclusao/<?php echo $questao->getIdQuestao(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        <?php
            }
        ?>
    </div>
</div>
</div>