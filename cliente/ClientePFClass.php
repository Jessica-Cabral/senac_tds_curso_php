<?php
//incluir ClasseCliente
include_once 'ClienteClass.php';
//classe Cliente PJ
class ClientePFClass extends ClienteClass
{
    //atributos próprios
    private $nome;
    private $cpf;

    //getters e setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    //métodos próprios
    public function verificarCPF($cpf)
    {
        if (strlen($cpf) == 11) {
            return true;
        } else {
            return false;
        }
    }

    public function inserirClientePF($nome, $cpf)
    {
        //verificar cpf
        if ($this->verificarCPF($cpf) == true) {
            print "Cliente cadastrado com sucesso!";
        } else {
            print "O CPF é inválido!";
        }
    }
}
