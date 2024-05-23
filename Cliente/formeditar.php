<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once("../conectar.php");
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }else
    {
        header("location:listar.php");
        exit();
    }
    
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $resultado = mysqli_query($conexao,$sql);
    if($resultado && mysqli_num_rows($resultado)>0)
    {
        $cliente = mysqli_fetch_assoc($resultado);
    }else
    {
        header("location:listar.php");
        exit();
    }

    ?>
    <h1>dados do cliente</h1>
    <form action="atualizar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome'];?>" require><br>
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" require>
            <option value="masculino" <?php if($cliente['sexo'] == "masculino") echo "selected" ?>>masculino</option>
            <option value="feminino" <?php if($cliente['sexo'] == "feminino") echo "selected" ?>>feminino</option>
        </select><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $cliente['telefone'];?>"><br>
        <label for="endereco">Endereco:</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo $cliente['endereco'];?>" require><br>

        <input type="hidden" name="id" value="<?php echo $id;?>" >

        <input type="submit" value="Atualizar">
        <a href="listar.php">Voltar</a>
    </form>
</body>
</html>