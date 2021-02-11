<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Organazium: Relatórios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <header class="container-fluid text-center">
        <h2>Informações Financeiras</h2>
    </header>

    <form method="get" action="Controller/InformacoesFinanceiras.php">
        <div class="container-fluid d-flex justify-content-center">
            <div class="mx-auto">
                    <input name="saldo" type="submit" value="Saldo" class="btn btn-outline-secondary btn-lg">
                    <input name="relatorio_receitas" type="submit" value="Gerar Relatório de Receitas" class="btn btn-outline-secondary btn-lg">
                    <input name="relatorio_despesas" type="submit" value="Gerar Relatório de Despesas" class="btn btn-outline-secondary btn-lg">
            </div>
        </div>
    </form>
</body>
</html>