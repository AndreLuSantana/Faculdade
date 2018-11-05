<?php

class Calcula {
    
   
    private $ano;
    private $estado;
    private $arvores;
    private $volume;
    
    function getAno() {
        return $this->ano;
    }

    function getEstado() {
        return $this->estado;
    }

    function getArvores() {
        return $this->arvores;
    }

    function getVolume() {
        return $this->volume;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setArvores($arvores) {
        $this->arvores = $arvores;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }

    function arvoresRepor(){
        return $this->getVolume()*6;
    }
    
    function valorPagar(){
        return $this->getArvores()*.75;
    }
}
