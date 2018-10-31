<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']) OR empty($_POST['nome']) OR empty($_POST['email']))) {
  header("Location: cadastro.php"); exit;
}
// Tenta se conectar ao servidor MySQL
$con= mysqli_connect('localhost', 'root', 'vertrigo', 'horta') or trigger_error(mysql_error());
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha =   sha1($_POST['senha']);
$nivel = "1";
$ativo = "1";
$cadastro = date("Y-m-d H:i:s");
// Validação do usuário/senha digitados
$sql = "SELECT usuario FROM `usuarios` WHERE (`usuario` = '". $usuario ."')";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query) > 0) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  echo "Esse Nome de Usuário já existe!"; exit;
} else {
$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('$nome', '$usuario', '$senha', '$email', '$nivel', '$ativo', '$cadastro')"; 
mysqli_query($con, $sql) or die("Erro ao tentar cadastrar");
mysqli_close($con);
//header("Location: reservaregistrada.php");
echo "Usuário Com Sucesso";
}
?>