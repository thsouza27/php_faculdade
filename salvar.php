<style>
body {
     background-color:#b3ffb3;
     }
h1 {
     color:yellow;
     background-color:black; 
     text-align: center;
   }
</style>

<h1> Trabalho de PHP</h1>

<?php
$nome = $_GET['nome'];
$dataNasc = $_GET['dataNasc'];
$salario = $_GET['salario'];
$dsn = 'mysql:dbname=trabphp;host=127.0.0.1';
$user = 'root'; //root
$password = '';//senha no mysql = vazio
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$count = $dbh->exec("insert into cliente(nome, dataNasc, salario) 
                values('$nome', '$dataNasc', '$salario') ");
echo "<p><h1>$count registro foi incluído com sucesso.</p></h1>";
echo "<br><br><a href=index.php>Voltar para a pagina inicial.</a>  ";
?>