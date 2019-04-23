<style>
body {
     background-color:#80dfff;
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
$id = $_GET['id'];
$dsn = 'mysql:dbname=trabphp;host=127.0.0.1';
$user = 'root'; //root
$password = '';//senha no mysql = vazio
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql=
$count = $dbh->exec("update cliente set
                nome='$nome',  
                dataNasc='$dataNasc',
                salario=$salario
                where id=$id ");
echo "<p><h1>$count registro foi alterado com sucesso.</p></h1>";
echo "<br><br><a href=index.php>Voltar para a pagina inicial.</a>  ";
?>