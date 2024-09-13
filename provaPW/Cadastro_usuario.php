<?php 

$server= "localhost";
$usuario= "root";
$senha= "";
$db ="prova";

$conexao = mysqli_connect($server, $usuario, $senha, $db) or die ('Não foi possível conectar');

if (!$conexao) {
	die ("Connetion failed: ".mysqli_connect_error());
}
		$nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $nasc = $_POST['nasc'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];
        $serie = $_POST['serie'];
        $curso = $_POST['curso'];

		$sql = "INSERT INTO usuarios (nome,telefone,nasc,sexo,cidade,serie,curso) VALUES('$nome','$telefone','$nasc','$sexo','$cidade','$serie','$curso')";

		if (mysqli_query($conexao, $sql)) {
			echo "Dados armazenados com sucesso!";

		}
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error(conexao);

		}
mysqli_close($conexao);

?>