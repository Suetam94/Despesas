<?php

require_once 'Controller/BancoDeDados.php';

    if (!empty($_POST)) {
        $conn = new BancoDeDados();

        if ($conn->verifyLogin($_POST['user_login'], $_POST['password_login'])) {
            header('Location: funcionalities.php');
        }

        else { ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <title>Organazium: Organizador de Finanças</title>
                <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
                <link rel="stylesheet" href="assets/style.css" type="text/css">
                <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300&display=swap" rel="stylesheet">

                <script src="https://kit.fontawesome.com/89e70a8b58.js" crossorigin="anonymous"></script>
                <script>
                    $(window).on('load', function() {
                        $('#unSuccefullLogin').modal('show');
                    });
                </script>
            </head>

            <body>
            <div class="modal fade" id="unSuccefullLogin">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Suas credenciais são inválidas!<br>
                            Por favor, reescreva seu nome ou senha.
                        </div>
                        <div class="modal-footer">
                            <button onclick="window.location.href = 'login.php'" type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok!</button>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            </html>
       <?php }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Organazium: Organizador de Finanças</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/style.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/89e70a8b58.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <a href="home.php">
                <img id="logo-header" src="assets/logo.png" alt="logo">
            </a>
        </div>
    </header>

    <main class="container-fluid">
        <div class="title">
            <h1 class="display-6">Login</h1>
        </div>
        <form action="login.php" method="post">
            <div class="card m-auto" style="width: 50%;">
                <div class="card-body">
                    <h5 class="card-title">Digite suas credenciais:</h5>
                    <label class="d-block card-text form-label">
                        Nome de Usuário:
                        <input required name="user_login" type="text" class="form-control">
                    </label>
                    <label class="d-block card-text form-label">
                        Senha:
                        <input required name="password_login" type="password" class="form-control">
                    </label>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </main>

</body>
</html>
