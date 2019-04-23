<style>
     body {
          background-color:orange;
          font-size: 20px;
          
          }
     h1 {
          color:yellow;
          background-color:black; 
          text-align:center;
        }  
</style>  

<h1> Trabalho de PHP - EDITAR Cliente.</h1>


<?php
$id=$_GET['id'];
$dsn = 'mysql:dbname=trabphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = "SELECT * FROM cliente where id=$id";
foreach ($dbh->query($sql) as $row) {
    echo "<form action=salvar_editar.php>";
    
    echo "<p>Nome</p>";
    echo "<p><input type=text name=nome value='".
            $row['nome'] . "'>";

    echo "<p>Data de Nascimento</p>";
    echo "<p><input type=text name=dataNasc value='".
            $row['dataNasc'] . "'<h6>Digite as barras - DD/MM/AAAA </h6>" ;      

    echo "<p>Salario</p>";
    echo "<p><input type=ranger name=salario value=".
            $row['salario'] . ">";

    echo "<input type=hidden name=id value=". 
            $row['id'] . " >";
    echo "<br><br> <input type=submit value=Salvar>";
echo "</form>";
}
echo "<br><br>
<a href=index.php>Voltar para a página inicial.</a> ";
?>