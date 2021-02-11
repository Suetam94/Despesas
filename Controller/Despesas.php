<?php
require_once 'BancoDeDados.php';

$conn = new BancoDeDados();
$conn->createTableExpense();
$conn->insertExpenseData($_POST['expense_related_to'], $_POST['expense_value'], $_POST['expense_description'], $_POST['expense_launch_date'], $_POST['total_expenses_value'], $_POST['pay_day'], $_POST['fixed_cost']);