<?php

namespace App\Models\Entidades;

class Questao
{
 
    private $idQuestao;
    private $tipoQuestao;
    private $cabecarioQuestao;
    private $alternativa1;
    private $alternativa2;
    private $alternativa3;
    private $alternativa4;
    private $respostaQuestao;


    public function getIdQuestao()
    {
        return $this->idQuestao;
    }


    public function setIdQuestao($idQuestao)
    {
        $this->idQuestao = $idQuestao;

        return $this;
    }

    public function getTipoQuestao()
    {
        return $this->tipoQuestao;
    }

    public function setTipoQuestao($tipoQuestao)
    {
        $this->tipoQuestao = $tipoQuestao;

        return $this;
    }


    public function getCabecarioQuestao()
    {
        return $this->cabecarioQuestao;
    }


    public function setCabecarioQuestao($cabecarioQuestao)
    {
        $this->cabecarioQuestao = $cabecarioQuestao;

        return $this;
    }

    public function getAlternativa1()
    {
        return $this->alternativa1;
    }

    public function setAlternativa1($alternativa1)
    {
        $this->alternativa1 = $alternativa1;

        return $this;
    }

    public function getAlternativa2()
    {
        return $this->alternativa2;
    }


    public function setAlternativa2($alternativa2)
    {
        $this->alternativa2 = $alternativa2;

        return $this;
    }

    public function getAlternativa3()
    {
        return $this->alternativa3;
    }


    public function setAlternativa3($alternativa3)
    {
        $this->alternativa3 = $alternativa3;

        return $this;
    }

    public function getAlternativa4()
    {
        return $this->alternativa4;
    }


    public function setAlternativa4($alternativa4)
    {
        $this->alternativa4 = $alternativa4;

        return $this;
    }

    public function getRespostaQuestao()
    {
        return $this->respostaQuestao;
    }


    public function setRespostaQuestao($respostaQuestao)
    {
        $this->respostaQuestao = $respostaQuestao;

        return $this;
    }
}