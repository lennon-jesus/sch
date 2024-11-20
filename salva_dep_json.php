<?php
//$nome = $_GET['nome'];
//var_dump($_GET);

include 'conexao.php';

$comandoSQL = "INSERT INTO `tbldepartamento` (`id`, `nome`) VALUES (NULL, '{$_GET['nome']}')";

// PDOStatement|false
$resultado = $conexao->query($comandoSQL);

$vetor = array();

if($resultado) {
    $vetor['resultado'] = "Departamento {$_GET['nome']} cadastrado.";
} else {
    $vetor['erro'] = "Erro ao cadastrar departamento.";
}

echo json_encode($vetor);

?>