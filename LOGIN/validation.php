
<?php 
session_start();
$con = mysqli_connect('localhost','soumahoro','souleymane');
mysqli_select_db($con, 'agenzia');

$nome     = $_POST['nome'];
$password = $_POST['password'];

$sql = "SELECT * FROM registrazione WHERE nome = '$nome' && password = '$password'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['nomeUtente'] = $nome;
    header('Location:../index.php');
}
else{
    header('Location:login.php');
}
?>