<?php
declare(strict_types=1);

class ContaBancaria {
  /**
   * @var string
   */
  private $banco;
  /**
   * @var string
   */
  private $nomeTitular;
  /**
   * @var string
   */
  private $numeroAgencia;
  /**
   * @var string
   */
  private $numeroConta;
  /**
   * @var 
   */
  private $saldo;

  public function __construct(
    string $banco,
    string $nomeTitular,
    string $numeroAgencia,
    string $numeroConta,
    float $saldo
  ){
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }
  public function obterSaldo() : string
  {
    return 'O saldo do dia é: R$'.$this->saldo;
  }

  public function depositar( float $valor) : string
  {
    $this->saldo += $valor;
    return 'Depósito de: R$ '.$valor. ' realizado com sucesso.';

  }
  public function sacar(float $valor) 
  {
    $this->saldo -= $valor;
    return 'Saque de: R$ '.$valor. ' realizado com sucesso.';

  }
}
$conta = new ContaBancaria(
  'Banco do Brasil', //banco
  'Sandro Amâncio',  //nome
  '8455', //numeroAgencia
  '94730-7',  //numeroConta
  0 //saldo
);

$conta2 = new ContaBancaria(
  'Caixa Econômica Federal', //banco
  'Jão Pedro Cardoso',  //nome
  '2390', //numeroAgencia
  '98234-5',  //numeroConta
  0 //saldo
);
var_dump($conta);
var_dump($conta2);

// echo $conta->obterSaldo();
// echo PHP_EOL;
// echo $conta->depositar(300.40);
// echo PHP_EOL;
// echo $conta->obterSaldo();
// echo PHP_EOL;
// echo $conta->sacar(150);
// echo PHP_EOL;
// echo $conta->obterSaldo();
// echo PHP_EOL;
