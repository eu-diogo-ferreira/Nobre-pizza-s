<?php
include_once('connect.php');

$id = $_GET['id'];

$sql = "UPDATE user SET ranking = 1 WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) != 0){
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../users.php'>"
    . "<script type='text/javascript'>"
    . "alert('Usuário modificado com sucesso!');</script>";
}
else {
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../users.php'>"
    . "<script type='text/javascript'>"
    . "alert('Erro ao modificar o usuário.');</script>";
}
?>