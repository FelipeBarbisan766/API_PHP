<?php
include_once ("../conectar.php");//conexão com o banco de dados 
//coleta de dados 
$id = $_POST['id'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

//execução do update no banco de dados 
$sql = "UPDATE cliente SET nome='$nome',sexo='$sexo',telefone='$telefone',endereco='$endereco' WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);
if ($resultado) {
    mysqli_close($conexao);
    header("location:listar.php");
    exit();
} else {
    echo "Erro Ao atualizar o cliente" . mysqli_error($conexao);

}
?>