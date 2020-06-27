
<?php 
session_start();
$con = mysqli_connect('localhost','soumahoro','souleymane');
mysqli_select_db($con, 'agenzia');

$nome     = $_POST['nome'];
$password = $_POST['password'];

$sql = "SELECT * FROM registrazione WHERE nome = '$nome'";
$result = mysqli_query($con, $sql); 
$num = mysqli_num_rows($result); 
if($num == 1){ 
    echo "nomeUtente utente gia preso";
}
else{
    $reg = "INSERT INTO registrazione(nome, password) 
    VALUES ('$nome','$password')";
    mysqli_query($con, $reg);
    echo "registrazione ok";
}
?>