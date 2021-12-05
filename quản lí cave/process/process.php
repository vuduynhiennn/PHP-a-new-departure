<?php
require '../connect/connect.php';

$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['image'];

$sql1 = 'use articles';

$sql2 = "insert into presses(title, content, image) VALUES('$title', '$content', '$image')";

mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);

$erro = mysqli_error($conn);
