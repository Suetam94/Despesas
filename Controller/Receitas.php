<?php
require_once 'BancoDeDados.php';

$conn = new BancoDeDados();
$conn->createTableRevenue();
$conn->insertRevenueData($_POST['source_of_revenue'], $_POST['revenue_amount'], $_POST['launch_date'], $_POST['revenue_description'], $_POST['revenue_availability_date']);

