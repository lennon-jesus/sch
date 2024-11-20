<?php
//$nome = $_GET['nome'];
//var_dump($_GET);

include 'conexao.php';

if($_GET['tech']=='true')
    $tecnico = 1;
else
    $tecnico = 0;

$comandoSQL = "INSERT INTO `tblsolicitante` (`id`, `nome`, `email`, `senha`, `tecnico`) VALUES (NULL, '{$_GET['nome']}', '{$_GET['email']}', '{$_GET['senha']}', '{$tecnico}')";

// PDOStatement|false
$resultado = $conexao->query($comandoSQL);

$vetor = array();

if($resultado) {
    $vetor['resultado'] = "Usuário {$_GET['nome']} cadastrado.";
} else {
    $vetor['erro'] = "Erro ao cadastrar usuário.";
}

echo json_encode($vetor);

?>