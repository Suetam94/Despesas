<?php

require_once 'BancoDeDados.php';

foreach ($_GET as $get) {
    if ($get == 'Saldo') {
        $saldo = new BancoDeDados();
        $saldo->getSaldo();
    }
    else if ($get == 'Gerar Relatório de Receitas') {
        $relatorioReceitas = new BancoDeDados();
        $relatorioReceitas->getRevenueReport();
    }
    else if ($get == 'Gerar Relatório de Despesas') {
        $relatorioDespesas = new BancoDeDados();
        $relatorioDespesas->getExpenseReport();
    }
}