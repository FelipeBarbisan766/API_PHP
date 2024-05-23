<?php
include_once("../conectar.php");//conexão com o banco de dados 
//coleta de dados 
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

//execução do insert no banco de dados 
$sql = "INSERT INTO cliente(nome,sexo,telefone,endereco) VALUES('$nome','$sexo','$telefone','$endereco')";
$resultado = mysqli_query($conexao,$sql);
if ($resultado)
{
    header("location:listar.php");
    exit();
}else
{
    echo "Erro Ao cadastrar o cliente".mysqli_erro($conexao);

}
mysqli_close($conexao);


?>