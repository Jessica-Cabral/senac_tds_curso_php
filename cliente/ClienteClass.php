<?php

//classe cliente
class ClienteClass{

    //atributos
    private $codigo;
    private $endereco;

    //getters e setters
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    //metodos
    public function localizarEndereco(){
        return "Endereco Localizado";
    }
}
