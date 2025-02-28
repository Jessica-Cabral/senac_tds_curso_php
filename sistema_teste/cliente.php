<?php
//iniciar sessao
session_start();
//incluir a classe LoginClass
include_once "LoginClass.php";
//criar objeto/instancia
$objAcessar = new LoginClass();
//verificar se fez login
$objAcessar->controlarSessao();
//verificar se acionou o botao salvar
if (isset($_POST['salvar'])) {
    //dados do cliente
    $nome = htmlspecialchars($_POST['nome_cliente']);
    $dataNascimento = $_POST['dataNascimento_cliente'];
    $email = $_POST['email_cliente'];
    $cpf = htmlspecialchars($_POST['cpf_cliente']);
    $estado = $_POST['estado_cliente'];
    $observacao = htmlspecialchars($_POST['observacao_cliente']);
    //incluir a classe ClienteClass
    include_once "ClienteClass.php";
    //criar objeto/instancia
    $objCliente = new ClienteClass();
    //invocar o metodo inserir cliente
    //die("Ainda estou aqui...") //usado apenas para inspecionar o código
    $objCliente->inserir_cliente($nome_cliente, $dataNascimento_cliente, $email_cliente, $cpf_cliente, $observacao_cliente, $estado_cliente);
}

//verificae se acionou o botao consultar
if (isset($_POST['consultar'])) {
    //incluir a classe ClienteClass
    include_once "ClienteClass.php";
    //criar objeto/instancia
    $objCliente = new ClienteClass();
    //dados da consulta
    $nome = htmlspecialchars($_POST['nome_cliente']);
    $cpf = htmlspecialchars($_POST['cpf_cliente']);
    //invocar o metodo inserir cliente
    //die('Clique em consultar...');
    $objCliente->consultar_cliente($nome,$cpf);
}

//verificae se acionou o botao alterar
if (isset($_POST['alterar'])) {
    //incluir a classe ClienteClass
    include_once "ClienteClass.php";
    //criar objeto/instancia
    $objCliente = new ClienteClass();
    //dados da consulta
    $nome = htmlspecialchars($_POST['nome_cliente']);
    $cpf = htmlspecialchars($_POST['email_cliente']);
    $cpf = htmlspecialchars($_POST['observacao_cliente']);
    //invocar o metodo alterar cliente
    //die('Clique em consultar...');
    $objCliente->alterar_cliente($nome,$email,$observacao);
}

//verificae se acionou o botao excluir
if (isset($_POST['excluir'])) {
    //incluir a classe ClienteClass
    include_once "ClienteClass.php";
    //criar objeto/instancia
    $objCliente = new ClienteClass();
    //dados da consulta
    $cpf = htmlspecialchars($_POST['cpf_cliente']);
    //invocar o metodo inserir cliente
    //die('Clique em consultar...');
    $objCliente->excluir_cliente($cpf);
}