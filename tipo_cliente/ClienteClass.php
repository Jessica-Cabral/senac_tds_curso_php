<?php

class ClienteClass{
    //atributos
    private $codigo;
    private $endereco;
    
    //getters e setters
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    //método
    public function localizar_endereço($endereco_cliente){
        $endereco_cliente = "Rua onde o vento faz a curva";
    }
}
?>