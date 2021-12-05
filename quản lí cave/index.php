<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php
    require './connect/connect.php';
    $sql1 = "use articles";
    $sql2 = "select * from presses";
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_query($conn, $sql2);
    ?>
    <a href="./insert/insert.php">Insert a new girl</a>
    <table>
        <tr>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
        <?php foreach ($result as $value) { ?>
            <tr>
                <td> <?php echo $value['title']; ?> </td>
                <td> <?php echo $value['content']; ?> </td>
                <td> 
                    <img width="200px" src="<?php echo $value['image'];?>" alt="">
                </td>
                <td> 
                    <a href="./delete/delete.php">xóa</a>
                </td>
                <td>
                    <a href="./fix/fix.php">sửa</a>
                </td>
            </tr>
        <?php } ?>
    </table>


</body>

</html>