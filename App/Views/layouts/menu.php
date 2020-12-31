<nav class="navbar navbar-inverse navbar-fixed-top navbar-light bg-light">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://<?php echo APP_HOST; ?>">T-Questão</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php if($viewVar['nameController'] == "HomeController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>" >Home</a>
                </li>
                <li <?php if($viewVar['nameController'] == "ProdutoController" && ($viewVar['nameAction'] == "" || $viewVar['nameAction'] == "index")) { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/questao" >Lista de Questão</a>
                </li>
                <li <?php if($viewVar['nameController'] == "ProdutoController" && $viewVar['nameAction'] == "cadastro") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/questao/cadastro" >Cadastro de Questão</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


