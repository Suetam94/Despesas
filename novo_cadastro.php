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
            <h1 class="display-6">Cadastro de Novo Usuário</h1>
        </div>

        <form action="Controller/Cadastro.php" method="post">
            <div class="row d-flex align-items-center justify-content-between">
                <label class="form-label col">
                    Nome:
                    <input required autofocus class="form-control" type="text" name="customer_name">
                </label>
                <label class="form-label col">
                    Sobrenome:
                    <input required class="form-control" type="text" name="customer_last_name">
                </label>
                <label class="form-label col">
                    Data de nascimento:
                    <input required class="form-control" type="date" name="customer_birthday">
                </label>
                <label class="form-label col">
                    Nome de Usuário:
                    <input required class="form-control" type="text" name="customer_user">
                </label>
                <label class="form-label col">
                    Nova senha:
                    <input required minlength="6" maxlength="10" class="form-control" type="password" name="customer_password">
                </label>
                <label class="form-label col">
                    Repita a senha:
                    <input required minlength="6" maxlength="10" class="form-control" type="password" name="customer_password_repeat">
                </label>
                <div class="col mt-3">
                    <input class="btn btn-outline-info" type="submit">
                    <input class="btn btn-outline-secondary" type="reset">
                </div>
            </div>
        </form>
    </main>
</body>
</html>
