<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php  
    include'../menu.php';
    ?>

  <form action="process_insert.php"  method="post" enctype="multipart/form-data">
  Hãng sản xuất
    
    Tên
    <input type="text" name ="name">

<button>Thêm</button>

  </form>
</body>
</html>