<?php
//$nome = $_GET['nome'];
//var_dump($_GET);

include 'conexao.php';

$comandoSQL = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '{$_GET['nome']}', '{$_GET['email']}', '{$_GET['senha']}')";

// PDOStatement|false
$resultado = $conexao->query($comandoSQL);

if($resultado) {
    echo "Usuário {$_GET['nome']} cadastrado.";
} else {
    echo "Erro ao cadastrar usuário.";
}


?>