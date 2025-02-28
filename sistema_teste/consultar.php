<?php
//iniciar sessão
//session_start();
//incluir classe LoginClass
include_once "LoginClass.php";
//criar objeto instância
$objAcessar = new LoginClass();
//verificar se fez login
$objAcessar->controlarSessao();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title><?php echo $_SESSION['titulo_sistema'];?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo $_SESSION['nome_sistema']?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="principal.php">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-people-fill"></i> Cliente
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="consultar.php"><i class="bi bi-search"></i> Consultar</a></li>
                            <li><a class="dropdown-item" href="cadastrar.php"><i class="bi bi-person-add"></i> Cadastrar</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i> </i><?php echo $_SESSION['login'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php"><i class="bi bi-box-arrow-right"></i> Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <form action="cliente.php" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nome_cliente" class="form-label">Nome</label>
                        <input type="text" name="nome_cliente" class="form-control" id="nome_cliente">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="cpf_cliente" class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpf_cliente" id="cpf" rows="3" maxlength="11"></input>
                    </div>
                </div>
            </div>
            <button type="submit" name="consultar" class="btn btn-primary"><i class="bi bi-floppy"></i> Consultar</button>
        </form>
        <br>
        <h4>Dados do cliente:</h4>
        <hr>

        <?php
        //verificar se tem dados para mostrar
        if (isset($_SESSION['resultado'])) {
        ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['resultado'] as $key => $valor) {
                        echo "<tr>";
                        echo "<td>{$valor['nome']}</td>";
                        echo "<td>{$valor['data_nasc']}</td>";
                        echo "<td>{$valor['cpf']}</td>";
                        echo "<td>{$valor['email']}</td>";
                        echo '<td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#alterar' . $valor['senha'] . '"><i class="bi bi-pencil-square"></i></button>';
                        echo ' <button type="button" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#excluir' . $valor['senha'] . '"><i class="bi bi-x"></i></button></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "Sem dados!";
        }
        //reset de $_SESSION['resultado']
        //unset($_SESSION['resultado']);
        ?>
    </div>
    <!-- Modal alterar -->
    <?php
    foreach ($_SESSION['resultado'] as $key_alterar => $valor_alterar) {
    ?>
        <!-- Modal -->
        <div class="modal fade" id="alterar<?php echo $valor_alterar['senha']; ?>" tabindex="-1" aria-labelledby="alterar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="alterar">Alterar cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $valor_alterar['nome']; ?>
                        <br>
                        <label for="nome_cliente" class="form_label">Nome: </label>
                        <input type="text" class="form-control" name="nome_cliente" value="<?php $valor_alterar['nome']; ?>" placeholder="<?php print $valor_alterar['nome']; ?>">
                        <br>
                        <label for="CPF_cliente" class="form_label">CPF: </label>
                        <input type="text" class="form-control" name="CPF_cliente" disabled value="<?php print $valor_alterar['cpf']; ?>" readonly>
                        <br>
                        <label for="email_cliente" class="form_label">Email: </label>
                        <input type="email" class="form-control" name="email_cliente" value="<?php $valor_alterar['email']; ?>" placeholder="<?php print $valor_alterar['email']; ?>">
                        <br>
                        <label for="descricao_cliente" class="form_label">Email: </label>
                        <textarea name="observacao_cliente" id="observacao_cliente" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submi" nome="alterar" class="btn btn-primary">Alterar</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>

    <!-- Modal excluir cliente -->
    <?php
    foreach ($_SESSION['resultado'] as $key_excluir => $valor_excluir) {
    ?>
        <!-- Modal -->
        <div class="modal fade" id="excluir<?php echo $valor_excluir['senha']; ?>" tabindex="-1" aria-labelledby="alterar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="alterar">Excluir cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="cliente.php" method="post">
                            <div class="mb-3">
                                <label for="nome_cliente" class="form-label">Nome</label>
                                <input type="text" readonly value="<?php print $valor_excluir['nome']; ?>" name="nome_cliente" class="form-control" id="nome_cliente" placeholder="Digite o nome completo...">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>

    <!-- Modal -->
    <div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mensagem</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-warning" role="alert">
                    <?php echo $_SESSION['mensagem']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mostrar modal automaticamente -->
    <?php if ($_SESSION['mostrar_mensagem'] == true) {
        $_SESSION['mostrar_mensagem'] = false ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('mensagem'));
                myModal.show();
            });
        </script>
    <?php } else {
        $_SESSION['mostrar_mensagem'] = false;
    } ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>