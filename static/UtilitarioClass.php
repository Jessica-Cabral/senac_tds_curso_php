<?php
//Classe utilitários
class UtilitarioClass{
    //atributos
    private $palavra;
    //getters e setters
    public function getPalavra()
    {
        return $this->palavra;
    }

    public function setPalavra($palavra): self
    {
        $this->palavra = $palavra;

        return $this;
    }

    //métodos estáticos
    public static function maiuscula($palavra_maiscula){
        return strtoupper($palavra_maiscula);
    }

    public static function tamanho_string($palavra_tamanho){
        return strlen ($palavra_tamanho);
    }

    //métodos aplicado de forma comum
    public function retirar_espaco($palavra_sem_espaco){
        $this->setPalavra($palavra_sem_espaco);
        return trim($this->getPalavra());
    }
}
    
?>