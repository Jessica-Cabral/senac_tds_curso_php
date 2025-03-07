<?php
//incluir ClienteClass
include_once "ClienteClass";

Class ClienteFisicoClass extends ClienteClass {
    //atributos
    private $nome;
    private $cpf;

    //getters e setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    //método cliente físico
    public function verificar_cpf($cpf){
        echo "implementar!";
    }
}
?>