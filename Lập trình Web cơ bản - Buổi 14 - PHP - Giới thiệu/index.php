<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>This is my first application</title>
</head>
<body>
      <?php 
        echo '<h1> hello world </h1>'; 
        $a = 3;
        if ($a < 10 ) {
          echo 'biến ' . $a . ' nhỏ hơn 10' . ' đúng không';
        } else {
          echo 'biến a lớn hơn 10';
        }
      ?> 
</body>
</html>