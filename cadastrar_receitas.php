<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Organazium: Cadastrar Receitas</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <header class="container-fluid">
        <div>
            <h2>Cadastrar Receitas</h2>
        </div>
    </header>

    <div class="container-fluid">
        <form action="Controller/Receitas.php" method="post">
            <label class="form-label">
                Fonte da Receita:
                <input class="form-control" type="text" name="source_of_revenue" required>
            </label>
            <label class="form-label">
                Valor da Receita:
                <input class="form-control" type="text" name="revenue_amount" required>
            </label>
            <label class="form-label">
                Data do Lançamento:
                <input class="form-control" type="date" name="launch_date" required>
            </label>
            <label class="form-label">
                Descrição:
                <input class="form-control" type="text" name="revenue_description" required>
            </label>
            <label class="form-label">
                Data da disponibilidade da receita:
                <input class="form-control" type="date" name="revenue_availability_date" required>
            </label>
            <input class="btn btn-outline-info" type="submit">
            <input class="btn btn-outline-secondary" type="reset">
        </form>
    </div>

</body>
</html>