<?php
//$nome = $_GET['nome'];
//var_dump($_GET);

include 'conexao.php';

$comandoSQL = "INSERT INTO `usuarios` (`id`, `nome`) VALUES (NULL, '{$_GET['nome']}'";

// PDOStatement|false
$resultado = $conexao->query($comandoSQL);

if($resultado) {
    echo "Departamento {$_GET['nome']} cadastrado.";
} else {
    echo "Erro ao cadastrar departamento.";
}


?>