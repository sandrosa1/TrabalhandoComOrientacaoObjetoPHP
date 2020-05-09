<?php

class ContaBancaria {
  public $banco;
  private $nomeTitular ='João Pedro';
  public $numeroAgencia;
  public $numeroConta;
  public $saldo;
}

// o objeto e a estancia de uma classe
//Exemplo abaixo está atriuindo objeto a um nova variavel 
$conta = new ContaBancaria();

var_dump($conta->nomeTitular);