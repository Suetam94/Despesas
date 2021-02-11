<?php

require_once 'BancoDeDados.php';

$conn = new BancoDeDados();
$conn->createTableCustomerRegistry();

if ($_POST['customer_password'] == $_POST['customer_password_repeat']) {
    $conn->insertCustomerRegistry($_POST['customer_name'], $_POST['customer_last_name'], $_POST['customer_birthday'], $_POST['customer_user'], $_POST['customer_password']);
    header('Location: ../login.php');
}

else { ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Organazium: Organizador de Finanças</title>
        <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../assets/style.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/89e70a8b58.js" crossorigin="anonymous"></script>
        <script>
            $(window).on('load', function() {
                $('#passwordErrorModal').modal('show');
            });
        </script>

    </head>
    <body>
    <div class="modal fade" id="passwordErrorModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">As senhas não conferem!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    As senhas digitadas não são iguais, por favor, tente novamente.
                </div>
                <div class="modal-footer">
                    <button onclick="window.location.href = '../novo_cadastro.php'" type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok!</button>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

<?php } ?>