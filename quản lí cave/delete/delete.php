<?php
include '../connect/connect.php';

$sql1 = "use articles";
$sql2 = "delete from presses where title = 'dit em gai cục ngon'";

mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
$erro = mysqli_errno($conn);
echo $erro;
?>