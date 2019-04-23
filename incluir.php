<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf8>

    <style>
     body {
          background-color:lightgreen;
          font-size: 20px;
          }
     h1 {
          color:yellow;
          background-color:green; 
          text-align:center;
        }
	</style> 
     
    <title>Inclusão de novos clientes</title>
  </head>

  <body>

    <h1>Trabalho de PHP - INCLUIR CLIENTE.</h1>

    <form action=salvar.php>

      <p>Nome</p>
      <input type=text name=nome placeholder="Digite seu Nome">
      <p>Data de Nascimento</p>
      <input type=text name=dataNasc placeholder="DD/MM/AAAA" <h6>Digite as barras - DD/MM/AAAA </h6> 
      <p>Salário</p>
      <input type=ranger name=salario min="0" max="1.000,000" placeholder="R$ x.xxx,xx">
      <br><br>
      <input type=submit value=Salvar>

    </form> 
    <br><br>
      <a href=index.php>Voltar para a página inicial.</a>
  </body>
</html>