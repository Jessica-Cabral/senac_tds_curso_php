<?php
//incluir classe AnimalClass
include_once "AnimalClass.php";
//classe animal
class CachorroClass extends AnimalClass
{
    //atributos próprios
    private $idade;
    //getters e setters
    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    //métodos proprios
    public function informar_idade($idade_cachorro)
    {
        $this->setIdade($idade_cachorro);
    }

    public function mostrar_idade()
    {
        echo "<br> A idade é " . $this->getIdade();
    }

    //Métodos
    public function fazer_som()
    {
        return "faz au...au";
    }
    //implementando método abstrato (abstração)
    public function descrever_animal()
    {
        echo "O nome do cachorro é " . $this->getNome() . " e a idade é " . $this->getIdade(). "anos";
    }
}
