<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include_once("../navBar.php");?>
<body>
    <div class="container">
        <h1>Listar clientes</h1>
        <table class="table">
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
                include_once ("../conectar.php");
                $sql = "SELECT * FROM cliente";
                $resultado = mysqli_query($conexao, $sql);
                if ($resultado) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "
                <tr>
                    <td>" . $linha['nome'] . "</td>
                    <td>" . $linha['sexo'] . "</td>
                    <td>" . $linha['endereco'] . "</td>
                    <td>" . $linha['telefone'] . "</td>
                    <td><a href='formeditar.php?id=".$linha['id']."' class='btn btn-primary'>Editar</a> . <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    Apagar
                  </button></td>
                </tr>
                ";
                    }
                    ;
                } else {
                    echo "Erro no Select Cliente" . mysqli_error($conexao);
                }

                ?>
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja Apagar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Você realmente deseja Apagar ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" href="remover.php" class="btn btn-danger">Apagar</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>