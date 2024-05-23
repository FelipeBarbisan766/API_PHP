<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Listar clientes</h1>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Emdereço</th>
            <th>telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include_once("../conectar.php");
        $sql = "SELECT * FROM cliente";
        $resultado = mysqli_query($conexao,$sql);
        if($resultado)
        {
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "
                <tr>
                    <td>".$linha['nome']."</td>
                    <td>".$linha['sexo']."</td>
                    <td>".$linha['endereco']."</td>
                    <td>".$linha['telefone']."</td>
                    <td><a>Editar</a><a>Remover</a></td>
                </tr>
                ";
            };
        }else
        {
            echo "Erro no Select Cliente".myslqi_error($conexao);
        }

    ?>
    </div>
</body>
</html>