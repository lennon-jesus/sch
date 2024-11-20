<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de departamentos</title>
<script>
function envia() {
    var endereco = 'salva_dep_json.php';

    endereco += '?nome=' + document.getElementById('nome').value;


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
    <form action='salva_dep_json.php'>
        <label for="">Nome:</label>
        <input type="text" id="nome"><br>
        <input type="button" onclick="envia()" value="Cadastrar">
    </form>
    <p id="saida"></p>
</body>
</html>