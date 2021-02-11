<?php

class BancoDeDados
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=jb', 'root', '');
        $this->conn->query('USE JB');
    }

    public function createTableCustomerRegistry()
    {
        try {
            $this->conn->query(
                'CREATE TABLE IF NOT EXISTS CADASTRO (
                CustomerId int auto_increment primary key,
                PrimeiroNome text,
                Sobrenome text,
                DataNascimento date,
                NomeUsuario text,
                Senha varchar(10)              
            )'
            );
        } catch (Exception $exception) {
            echo sprintf($exception);
        }
    }

    public function createTableRevenue()
    {
        try {
            $this->conn->query(
                'CREATE TABLE IF NOT EXISTS RECEITAS (
                RevenueId int auto_increment primary key,
                CustomerId int,
                FonteDaReceita text,
                ValorDaReceita decimal(10, 2),
                DataDoLançamento date,
                Descricao text,
                DataDaDisponibilidadeDaReceita date,
                
                foreign key (CustomerId) references CADASTRO(CustomerId)   
            )'
            );
        } catch (Exception $exception) {
            sprintf($exception);
        }
    }

    public function createTableExpense()
    {
        try {
            $this->conn->query(
                'CREATE TABLE IF NOT EXISTS DESPESAS (
                ExpenseId int auto_increment primary key,
                CustomerId int,
                DespesaReferenteA text,
                ValorDaDespesa decimal(10, 2),
                Descricao text,
                DataDoLançamento date,
                ValorTotal decimal(10, 2),
                DataDoPagamento date,
                CustoFixo decimal(10, 2),
                
                foreign key (CustomerId) references CADASTRO(CustomerId)     
            )'
            );
        } catch (Exception $exception) {
            echo sprintf($exception);
        }
    }

    //Cadastro
    public function insertCustomerRegistry($name, $lastName, $birthday,$userName, $password)
    {
        $insert = $this->conn->prepare('INSERT INTO CADASTRO (PrimeiroNome, Sobrenome, DataNascimento, NomeUsuario,Senha) VALUES (?, ?, ?, ?, ?)');

        return $insert->execute(array(
                $name,
                $lastName,
                $birthday,
                $userName,
                $password
            )
        );
    }

    //Login
    public function verifyLogin($userName, $password)
    {
        $select = $this->conn->query("SELECT * FROM CADASTRO WHERE NomeUsuario = $userName AND  Senha == $password");
        if (isset($select)) {
            return true;
        }

        return false;
    }

    //Receitas
    public function insertRevenueData($sourceOfRevenue, $revenueAmount, $revenueLaunchDate, $revenueDescription, $revenueAvailabilityDate)
    {
        $insert = $this->conn->prepare('INSERT INTO RECEITAS (FonteDaReceita, ValorDaReceita, DataDoLançamento, Descricao, DataDaDisponibilidadeDaReceita) VALUES (?, ?, ?, ?, ?)');

        return $insert->execute(array(
            $sourceOfRevenue,
            $revenueAmount,
            $revenueLaunchDate,
            $revenueDescription,
            $revenueAvailabilityDate
        ));
    }

    //Despesas
    public function insertExpenseData($expenseRelatedTo, $expenseValue, $expenseDescription, $expenseLaunchDate, $totalExpensesValue, $payDay, $fixedCost)
    {
        $insert = $this->conn->prepare('INSERT INTO DESPESAS (DespesaReferenteA, ValorDaDespesa, Descricao, DataDoLançamento, ValorTotal, DataDoPagamento, CustoFixo) VALUES (?, ?, ?, ?, ?, ?, ?)');

        return $insert->execute(array(
            $expenseRelatedTo,
            $expenseValue,
            $expenseDescription,
            $expenseLaunchDate,
            $totalExpensesValue,
            $payDay,
            $fixedCost
        ));
    }

    //Saldo
    public function getSaldo()
    {
        $revenueSum = $this->conn->query('SELECT SUM(ValorDaReceita) AS total_receitas FROM RECEITAS')->fetch();
        $expenseSum = $this->conn->query('SELECT SUM(ValorTotal) AS total_despesas FROM DESPESAS')->fetch();

        return $revenueSum['total_receitas'] - $expenseSum['total_despesas'];
    }

    //Relatório de Receitas
    public function getRevenueReport()
    {
        $revenueReport = $this->conn->query('SELECT * FROM RECEITAS')->fetchObject();

        return (json_decode(json_encode($revenueReport), true));
    }

    //Relatório de Despesas
    public function getExpenseReport()
    {
        $expenseReport = $this->conn->query('SELECT * FROM DESPESAS')->fetchObject();

        return (json_decode(json_encode($expenseReport), true));
    }
}

