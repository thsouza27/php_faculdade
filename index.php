<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <style>
     body {
          background-color: lightblue;
          }
     h1 {
          color:yellow;
          background-color:DodgerBlue; 
          text-align: center;
        }
	</style>  
     
    
    <title>Página de consulta</title>

    <link rel="stylesheet" type="text/css"
     href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    
    <script type="text/javascript" charset="utf8" 
        src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    <script type="text/javascript" charset="utf8" 
      src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabela').DataTable();
        } );
    </script>

</head>

<body>

<h1>Trabalho PHP - incluir, editar e excluir Clientes.</h1>

<table id="tabela" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Salário</th>   
            <th></th>       
            <th></th>            
        </tr>
    </thead>
    <tbody>
<?php
$dsn = 'mysql:dbname=trabphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
        $sql = 'SELECT * FROM cliente';
        foreach ($dbh->query($sql) as $row) {
        echo "<tr>";
        echo "<td>". $row['id'] . "</td>";
        echo "<td>". $row['nome'] . "</td>";
        echo "<td>". $row['dataNasc'] . "</td>";
        echo "<td>". $row['salario'] . "</td>";
       // echo number_format($salario, 2, '.', ',');
echo "<td> <a href=editar.php?id=".$row['id'].">Editar</a></td>";
echo "<td> <a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
        echo "</tr>";
        }
?>
    </tbody>
</table>

<br><br>
<a href=incluir.php> Adicionar Cliente</a>
<br><br>

</body>
</html>