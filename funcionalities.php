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
</head>

<body>
    <header class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <a href="home.php">
                <img id="logo-header" src="assets/logo.png" alt="logo">
            </a>
            <div>
                <button onclick="window.location.href = 'home.php'" type="button" class="btn btn-dark btn-sm">Sair</button>
            </div>
        </div>
    </header>

    <main>
        <div>
            <img src="assets/ecommerce-revenue-090216.jpg" class="img-fluid" alt="ecommerce">
        </div>
        <div class="container-fluid d-flex justify-content-center col">
            <div class="mx-auto">
                <a href="cadastrar_receitas.php">
                    <button class="btn btn-success btn-lg">Cadastrar Receitas</button>
                </a>
                <a href="cadastrar_despesas.php">
                    <button class="btn btn-danger btn-lg">Cadastrar despesas</button>
                </a>
                <a href="informacoes_financeiras.php">
                    <button class="btn btn-primary btn-lg">Informações Financeiras</button>
                </a>
            </div>
        </div>
    </main>
    </body>
</html>
