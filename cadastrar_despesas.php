<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Organazium: Cadastrar Despesas</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <header class="container-fluid">
        <h2>Cadastrar Despesas</h2>
    </header>

    <div class="container-fluid">
        <form action="Controller/Despesas.php" method="post">
            <label class="form-label">
                Despesa referente a:
                <input class="form-control" type="text" name="expense_related_to">
            </label>
            <label class="form-label">
                Valor da despesa:
                <input class="form-control" type="text" name="expense_value">
            </label>
            <label class="form-label">
                Descrição:
                <input class="form-control" type="text" name="expense_description">
            </label>
            <label class="form-label">
                Data do lançamento:
                <input class="form-control" type="date" name="expense_launch_date">
            </label>
            <label class="form-label">
                Valor total:
                <input class="form-control" type="text" name="total_expenses_value">
            </label>
            <label class="form-label">
                Data do pagamento:
                <input class="form-control" type="date" name="pay_day">
            </label>
            <label class="form-label">
                Custo fixo:
                <input class="form-control" type="text" name="fixed_cost">
            </label>
            <input class="btn btn-outline-info" type="submit">
            <input class="btn btn-outline-secondary" type="reset">
        </form>
    </div>
</body>
</html>