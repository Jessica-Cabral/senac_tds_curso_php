<?php
session_start();
//classeLogin
class LoginClass
{
    //atributos
    private $login = null;
    private $senha = null;

    //getters and setters
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    //metodos

    public function efetuarLogin($login_usuario, $senha_usuario)
    {
        //setar os atributos
        $this->setLogin($login_usuario);
        $this->setSenha($senha_usuario);
        //verificar login e senha
        if ($this->getLogin() == 'maria' and $this->getSenha() == '123456') {
            //criar variaveis de sessao
            $_SESSION['login'] = $this->getLogin();
            //redirecionar para a pagina principal
            header('Location: principal.php');
        }
    }

}
