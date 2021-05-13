<?php

class ContaBancaria{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo){
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo(){
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado! ';
    }
    
    public function sacar($valor){
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado! ';
    }
    
}

$conta1 = new ContaBancaria(
    'Banco do Brasil', //banco
    'Greice Mara', //nomeTitular
    '8244', //numeroAgencia
    '57354-10', //numeroConta
    0 //saldo
);

$conta2 = new ContaBancaria(
    'Caixa Econômica', //banco
    'Princesa Jujuba', //nomeTitular
    '4234', //numeroAgencia
    '598753-4', //numeroConta
    500.00 //saldo
);

class Vendas{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal){
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function obterVenda(){
        return $this;
    }

/*
    public function obterData(){
        return $this->data;
    }
    
    public function obterProduto(){
        return $this->produto;
    }
    public function obterQuantidade(){
        return $this->quantidade;
    }
    public function obterValorTotal(){
        return $this->valorTotal;
    }*/
}

$venda = new Vendas(
    '23-01-2021',
    'Cadeira de escritório',
    3,
    3300.00
);

echo ($venda->obterVenda());

/*
echo ($conta->obterSaldo());

echo "<br>";
echo "<br>";

echo $conta->depositar(300.00);
echo ($conta->obterSaldo());

echo "<br>";
echo "<br>";

echo $conta->sacar(100.00);
echo $conta->obterSaldo();*/