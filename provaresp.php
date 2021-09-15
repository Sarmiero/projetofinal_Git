<html>
<head>
<title>Suas Respostas</title>
<meta charset="utf-8">
</head>

<body>
<?php
require 'provaconexao.php';

$nome = $_POST['txtnome'];
$telefone = $_POST['txttelefone'];
$email = $_POST['txtemail'];


Echo "Seu nome é: ".$nome."<br>";
Echo "Seu telefone é: ".$telefone."<br>";
Echo "Seu e-mail é: ".$email."<br>";


$conexao = DBConnect();

$sql = "INSERT INTO tblclientes(idcliente, nomecliente, telcliente, emailcliente)
		values (0, '$nome', '$telefone', '$email')";
		
if (mysqli_query($conexao, $sql)) {
	echo "Cadastro  realizado com sucesso!";
} else {
	echo "Erro: ".mysqli_error($conexao);
}
?>
</body>
</html>	
