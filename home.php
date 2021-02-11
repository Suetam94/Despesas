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
            <div>
                <a href="novo_cadastro.php" type="button" class="btn btn-dark btn-sm">Cadastrar</a>
                <a href="login.php" type="button" class="btn btn-success btn-sm">Login</a>
            </div>
        </div>
    </header>

    <main class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-5">
                <h1 class="display-1 text-end fw-bold text-danger">Organize suas finanças com o Organazium</h1>
                <p class="lead text-end">
                    O problema não é o quanto se gasta, mas não saber quanto se têm para gastar!<br>
                    Nós te ajudamos nisso!
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" id="fundo-principal" src="assets/fundo.png" alt="pessoas rindo">
            </div>
        </div>
    </main>

    <footer class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-inline-block">
                <a href="home.php"><img id="logo-footer" src="assets/favicon.png" alt="logo"></a>
                <a href="home.php"><small class="d-inline-block">Finanças Pessoais</small></a>
                <a href="home.php"><small class="d-inline-block">Central de Ajuda</small></a>
                <a href="home.php"><small class="d-inline-block">Contato</small></a>
            </div>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>