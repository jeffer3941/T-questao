<?php

namespace App\Models\DAO;

use App\Models\Entidades\Questao;

class QuestaoDAO extends BaseDAO
{
    public  function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM questao WHERE id_questao = $id"
            );

            return var_dump($resultado->fetchObject(Questao::class));
        }else{
            $resultado = $this->select(
                'SELECT * FROM questao'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Questao::class);
        }

        return false;
    }

    public  function salvar(Questao $questao) 
    {
        try {

            $tipoQuestao    = $questao->getTipoQuestao();
            $cabecarioQuestao = $questao->getCabecarioQuestao();
            $alternativa1 = $questao->getAlternativa1();
            $alternativa2 = $questao->getAlternativa2();
            $alternativa3 = $questao->getAlternativa3();
            $alternativa4 = $questao->getAlternativa4();
            $respostaQuestao = $questao->getRespostaQuestao();

            return $this->insert(
                'questao',
                ":tipo_questao,:cabecario_questao,:alternativa_1,:alternativa_2,:alternativa_3,:alternativa_4,:resposta_questao",
                [
                    ':tipo_questao'=>$tipoQuestao,
                    ':cabecario_questao'=>$cabecarioQuestao,
                    ':alternativa_1'=>$alternativa1,
                    ':alternativa_2'=>$alternativa2,
                    ':alternativa_3'=>$alternativa3,
                    ':alternativa_4'=>$alternativa4,
                    ':resposta_questao'=>$respostaQuestao,

                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Questao $questao) 
    {
        try {

            $id  = $questao->getIdQuestao();
            $tipoQuestao    = $questao->getTipoQuestao();
            $cabecarioQuestao = $questao->getCabecarioQuestao();
            $alternativa1 = $questao->getAlternativa1();
            $alternativa2 = $questao->getAlternativa2();
            $alternativa3 = $questao->getAlternativa3();
            $alternativa4 = $questao->getAlternativa4();
            $respostaQuestao = $questao->getRespostaQuestao();

            return $this->update(
                'questao',
                "tipo_questao = :tipo_questao, 
                cabecario_questao = :cabecario_questao,
                alternativa_1 = :alternativa_1, 
                alternativa_2 = :alternativa_2,
                alternativa_3 = :alternativa_3,
                alternativa_4 = :alternativa_4,
                resposta_questao = :resposta_questao
                 ",
                [
                    ':id'=>$id,
                    ':tipo_questao'=>$tipoQuestao,
                    ':cabecario_questao'=>$cabecarioQuestao,
                    ':alternativa_1'=>$alternativa1,
                    ':alternativa_2'=>$alternativa2,
                    ':alternativa_3'=>$alternativa3,
                    ':alternativa_4'=>$alternativa4,
                    ':resposta_questao'=>$respostaQuestao,
                ],
                "id_questao = :id"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Questao $questao)
    {
        try {
            $id = $questao->getIdQuestao();

            return $this->delete('questao',"id_questao = $id");

        }catch (\Exception $e){

            throw new \Exception("Erro ao deletar", 500);
        }
    }
}