<?php

declare(strict_types=1);

class Venda
{
  /**
   * @avar string
   */
  private $produto;
  /**
   * @avar float
   */
  private $quantidade;
  /**
   * @avar string
   */
  private $data;
  /**
   * avar float
   */
  private $valorTotal;

  public function __construct(
    string $produto,
    float $quantidade,
    string $data,
    float $valorTotal
  ){
    $this -> produto = $produto;
    $this -> quantidade = $quantidade;
    $this -> data = $data;
    $this -> valorTotal = $valorTotal;
    
  }
  public function produtosDisponiveis() : string
  {
    return 'Os produtos disponiveis para venda são:'.$this-> produto;
  }
}



$item1 = new Venda (
  'Hd Sata',
  22,
  '25/09/2020',
  500.00
);

$item2 = new Venda(
  'Carregador Padrão para Celular',
  14,
  '12/10/2020',
  20.00
);


echo var_dump($item1->produtosDisponiveis(), $item2->produtosDisponiveis());