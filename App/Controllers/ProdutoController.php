<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\QuestaoDAO;
use App\Models\Entidades\Questao;
use App\Models\Validacao\QuestaoValidador;

class ProdutoController extends Controller
{
    public function index()
    {
        $questaoDAO = new QuestaoDAO();

        self::setViewParam('listaProdutos',$questaoDAO->listar());

        $this->render('/produto/index');

        Sessao::limpaMensagem();
    }

    public function cadastro()
    {
        $this->render('/questao/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    public function salvar()
    {
        $Questao = new Questao();
        $Questao->setTipoQuestao($_POST['cabecarioQuestao']);
        $Questao->setCabecarioQuestao($_POST['tipoQuestao']);
        $Questao->setAlternativa1($_POST['alternativa1']);
        $Questao->setAlternativa2($_POST['alternativa2']);
        $Questao->setAlternativa3($_POST['alternativa3']);
        $Questao->setAlternativa4($_POST['alternativa4']);
        $Questao->setRespostaQuestao($_POST['respostaQuestao']);

        Sessao::gravaFormulario($_POST);

        $questaoValidador = new QuestaoValidador();
        $resultadoValidacao = $questaoValidador->validar($Questao);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/questao/cadastro');
        }

        $questaoDAO = new QuestaoDAO();

        $questaoDAO->salvar($Questao);
        
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/questao');
      
    }
    
    public function edicao($params)
    {
        $id = $params[0];

        $questaoDAO = new QuestaoDAO();

        $questao = $questaoDAO->listar($id);

        if(!$questao){
            Sessao::gravaMensagem("questão inexistente");
            $this->redirect('/questao');
        }

        self::setViewParam('questao',$questao);

        $this->render('/questao/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {

        $Questao = new Questao();
        $Questao->setTipoQuestao($_POST['cabecarioQuestao']);
        $Questao->setCabecarioQuestao($_POST['tipoQuestao']);
        $Questao->setAlternativa1($_POST['alternativa1']);
        $Questao->setAlternativa2($_POST['alternativa2']);
        $Questao->setAlternativa3($_POST['alternativa3']);
        $Questao->setAlternativa4($_POST['alternativa4']);
        $Questao->setRespostaQuestao($_POST['respostaQuestao']);

        Sessao::gravaFormulario($_POST);

        $questaoValidador = new QuestaoValidador();
        $resultadoValidacao = $questaoValidador->validar($Questao);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/produto/edicao/'.$_POST['id']);
        }

        $questaoDAO = new QuestaoDAO();

        $questaoDAO->atualizar($Questao);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/questao');

    }
    
    public function exclusao($params)
    {
        $id = $params[0];

        $questaoDAO = new QuestaoDAO();

        $questao = $questaoDAO->listar($id);

        if(!$questao){
            Sessao::gravaMensagem("Produto inexistente");
            $this->redirect('/produto');
        }

        self::setViewParam('questao',$questao);

        $this->render('/questao/exclusao');

        Sessao::limpaMensagem();

    }

    public function excluir()
    {
        $Questao = new Questao();
        $Questao->setIdQuestao($_POST['id']);

        $questaoDAO = new QuestaoDAO();

        if(!$questaoDAO->excluir($Questao)){
            Sessao::gravaMensagem("Questão inexistente");
            $this->redirect('/questao');
        }

        Sessao::gravaMensagem("Questão excluida com sucesso!");

        $this->redirect('/questao');

    }
}