
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-mostra-aluno.css">
    <title>Document</title>
</head>
<body>
<?php 

session_start();

$_SESSION['nome'] = $_POST['name'];
$_SESSION['cpf'] = $_POST['cpf'];
$_SESSION['matricula'] = $_POST['matricula'];
?>

<form action="editar-dados.php" method="post">
    <table style="width:100%">
  <tr>
    <th>Nome</th>
    <th>CPF</th>
    <th>Matricula</th>
    <th>Ações</th>
  </tr>
  <tr>
   <td> <?php echo $_SESSION['nome'];?></td>
   <td> <?php echo $_SESSION['cpf'];?></td>
   <td> <?php echo $_SESSION['matricula'];?></td>
   <td> <input type="submit" value="Visualizar">
   </td>
  </tr>
</form>
</body>
</html>