<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>dados do clientee</h1>
    <form action="inserir.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" require><br>
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" require>
            <option value="masculino">masculino</option>
            <option value="feminino">feminino</option>
        </select><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone"><br>
        <label for="endereco">Endereco:</label>
        <input type="text" name="endereco" id="endereco" require><br>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>