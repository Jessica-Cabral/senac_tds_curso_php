<?php
//incluir classe AnimalClass
include_once "AnimalClass.php";
//classe animal
class GatoClass extends AnimalClass{
    //atributos próprios
    private $peso;
    //getters e setters
    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    //métodos proprios
    public function informar_peso($peso_gato){
        $this->setPeso($peso_gato);
    }

    public function mostrar_peso(){
        echo "<br> O peso é ".$this->getPeso();
    }
    //Métodos (polimorfismo - sobrescrever)
    public function fazer_som(){
        return "faz miau...miau";
    }
    //implementando método abstrato
    public function descrever_animal(){
        echo "O nome do gato é ".$this->getNome()." e o peso é ".$this->getPeso();
    }

}

?>