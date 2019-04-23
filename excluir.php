<style>
body {
     background-color:red;
     }
h1 {
     color:yellow;
     background-color:black; 
     text-align: center;
   }
</style>

<h1> Trabalho de PHP - EXCLUIR Cliente.</h1>


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
$count = $dbh->exec("delete from  cliente 
                   where id=$id ");
echo "<p><h1>$count registro foi excluído com sucesso.</p></h1>";
echo "<br><br>
<a href=index.php>Voltar para a pagina inicial.</a> ";
?>