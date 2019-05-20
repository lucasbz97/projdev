<?php
class questoes
{
    private $questao;
    private $alternativa;
    private $checkbox;

    function getQuestao()
    {
        return $this->questao;
    }
    function getAlternativa()
    {
        return $this->alternativa;
    }
    function getCheckbox()
    {
        return $this->checkbox;
    }

    function setQuestao($questao)
    {
        $this->questao = $questao;
    }
    function setAlternativa($alternativa)
    {
        $this->alternativa = $alternativa;
    }
    function setCheckbox($checkbox)
    {
        $this->checkbox = $checkbox;
    }
}
