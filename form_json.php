<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
<script>
function envia() {
    var endereco = 'salva_usuario_json.php';

    endereco += '?nome=' + document.getElementById('nome').value;
    endereco += '&email=' + document.getElementById('email').value;
    endereco += '&senha=' + document.getElementById('senha').value;
    endereco += '&tech=' + document.getElementById('tech').checked;

    // cria objeto 
    const xhttp = new XMLHttpRequest();

    // define a função chamada no retorno
    xhttp.onload = function() {
        var objeto = JSON.parse(xhttp.responseText);

        if(objeto.resultado) {
            document.getElementById('saida').innerHTML = objeto.resultado;
        } else {
            document.getElementById('saida').innerHTML = 'Erro: ' + objeto.erro;
        }

        document.getElementById('nome').value = '';
    }

    // Envia a requisição
    xhttp.open("GET", endereco);
    xhttp.send();
    }
</script>
</head>
<body>
    <form action="salva_usuario_json.php">
        <label for="">Nome:</label>
        <input type="text" id="nome"><br>
        <label for="">E-mail:</label>
        <input type="text" id="email"><br>
        <label for="">Senha:</label>
        <input type="password" id="senha"><br>
        <label for="tech">Técnico</label>
        <input type="checkbox" id="tech" name="tech"><br>
        <input type="button" onclick="envia()" value="Cadastrar">
    </form>
    <p id="saida"></p>
</body>
</html>