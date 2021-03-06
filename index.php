<?php
  require_once 'Funcionario.php';
  require_once 'Importar_txt.php';
  $txt = new Importar_txt;
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="js/exportExcel.js"></script>

    <title>Relógio de Ponto</title>

  </head>

  <body>
  
  <br>
  <h3>Relógio de Ponto - Anfertech</h3>
  <form method="POST" enctype="multipart/form-data">
										
										<label for="import-arquivo" class="txt">Importar TXT</label>
										<input id="import-arquivo" type='file' class="txt" name="imptxt" accept=".txt">

                    <label for="submit-arquivo" class="txt">Confirmar</label>
										<input type="submit" id="submit-arquivo" name="confirmatxt">		
										
                    <button type="button" class="exportar" onclick="exportTableToExcel('tblData', 'Relogio de Ponto')">Exportar Excel</button>
</form>

<div class="table-responsive">
<table class="table table-bordered table-hover" id="tblData">
  <thead class="thead-light">
    <tr>
      <th scope="col">NSR</th>
      <th scope="col">Registro</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
      <th scope="col">PIS</th>
    </tr>
  </thead>
  <tbody>
    <?php $txt->importartxt();?>
  </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
