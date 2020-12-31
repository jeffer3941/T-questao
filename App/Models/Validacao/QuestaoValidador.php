<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Questao;

class QuestaoValidador{

    public function validar(Questao $questao)
    {
        $resultadoValidacao = new ResultadoValidacao();

        if(empty($questao->getTipoQuestao()))
        {
            $resultadoValidacao->addErro('TipoQuestao',"Tipo: Este campo não pode ser vazio");
        }
        
        if(empty($questao->getCabecarioQuestao()))
        {
            $resultadoValidacao->addErro('cabecarioQuestao',"Cabeçario: Este campo não pode ser vazio");
        }

        if(empty($questao->getAlternativa1()))
        {
            $resultadoValidacao->addErro('alternativa1',"Alternativa: Este campo não pode ser vazio");
        }

        if(empty($questao->getAlternativa2()))
        {
            $resultadoValidacao->addErro('alternativa2',"Alternativa: Este campo não pode ser vazio");
        }

        if(empty($questao->getAlternativa3()))
        {
            $resultadoValidacao->addErro('alternativa3',"Alternativa: Este campo não pode ser vazio");
        }

        if(empty($questao->getAlternativa4()))
        {
            $resultadoValidacao->addErro('alternativa4',"Alternativa: Este campo não pode ser vazio");
        }

        if(empty($questao->getRespostaQuestao()))
        {
            $resultadoValidacao->addErro('respostaQuestao',"Reposta questao: Este campo não pode ser vazio");
        }
        return $resultadoValidacao;
    }
}