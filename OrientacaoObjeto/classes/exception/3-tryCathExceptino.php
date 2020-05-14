<?php
function validarUsuario(array $usuario)
{
  if (empty($usuario['codigo']) ||empty($usuario['nome']) || empty($usuario['idade']))
  {
    throw new Exception("Campos obrigatorios não foram preenchidos!\n");
  }

  return true;
}
$usuario =
[ 
  'codigo' => 1,
  'nome'   =>'',
  'idade'  =>57,
];
try
{
  $status = validarUsuario($usuario);
  echo "\n...executando...\n";

} 
catch (Exception $e)
{
  echo $e->getMessage();// getMessage e um metodo da class Exception e busca a msg de erro 
  exit;  // para retornar um false e o codigo não para a execuçõa poderia ser um exit.
}
echo "\n...executando...\n";
