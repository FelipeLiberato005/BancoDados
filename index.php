<?php
	
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=inciaindo_a','root','root');

	if(isset($_POST['acao'])){
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$momento_registro = date('Y-m-d H:i:s');

	$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

	$sql->execute(array($nome,$sobrenome,$momento_registro));
	echo "Inserido com sucesso";
}
?>


<!DOCTYPE html>
  <head>
    <title>Lista Clientes</title>
  </head>
  <body>
    	<form method="post">
    		
    			<input type="text" name="nome" required>
    			<input type="text" name="sobrenome" required>
    			<input type="submit" name="acao" value="Enviar">
    	</form>
  </body>
</html>

