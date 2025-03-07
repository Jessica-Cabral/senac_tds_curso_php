<?php
//classe animal
abstract class AnimalClass{
    //atributos
    private $nome;
    //método construtor
    public function __construct($nome_animal){
        $this->setNome($nome_animal);
    }
    
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

    //Métodos
    public function fazer_som(){
        return "faz som";
    }

    //método abstrato

    abstract function descrever_animal();
}
?>