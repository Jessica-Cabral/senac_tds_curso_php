<?php
session_start();
//Classe Login
class LoginClass {
    #atributos
    private $login = null;
    private $senha = null;

    #getters and setters

    public function setLogin($login){
        $this->login = $login; // $this->login é igual a $login($this->login faz referencia ao atributo) ($faz referencia ao paramento da function)
    }
    public function getLogin() {
        return $this->login;
    }

    public function setSenha($senha) {
        $this->senha = $senha; 
    }
    public function getSenha() {
        return $this->senha;
    }

    //metodos
    public function __construct()
    {
        $_SESSION['titulo_sistema'] = "Sistema Gestão";
        $_SESSION['nome_sistema'] = "SG 1.0";
        $_SESSION['mostrar_mensagem'] = false;
    }

    public function efetuarLogin($login, $senha) {
        #setar os atributos
        $this->setLogin($login);
        $this->setSenha($senha);
        //verificar login e senha
        if ($this->getLogin() == 'maria' and $this->getSenha() == '123456'){
            #criar variáveis de sessao
            $_SESSION['login'] = $this->getLogin();
            #redirecionar para a página principal
            header('Location: principal.php');
        } else {
            //mensagem de erro
            $_SESSION['mensagem'] = "Usuário ou Senha inválidos!";
            //mostrar mensagem
            $_SESSION['mostrar_mensagem'] = true;
            //redirecionar para a página principal
            header("Location: index.php");
        }
    }
    public function controlarSessao(){
        //verificar se tem sessao ativa
        if (!isset($_SESSION['login'])){
            //mensagem de erro
            $_SESSION['mensagem'] = "Efetue login no sistema.";
            //mostrar mensagem
            $_SESSION['mostrar_mensagem'] = true;
            //redirecionar para a página principal
            header("Location: index.php");

        }
        
    }
}
?>