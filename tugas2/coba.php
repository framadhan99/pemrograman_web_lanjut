<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method ="post">
        <input type="checkbox" name="laptop" value="LAPTOP"> Laptop
        <input type="checkbox" name="mouse" value="MOUSE"> mouse
        <br>
        <button type="submit" name="submit"> proses</button>
    </form>
    <?php
    if(isset($_POST['laptop'])){
        echo $_POST['laptop'];
    }elseif(isset($_POST['mouse'])){
        echo $_POST['mouse'];
    }
    ?>
    
</body>
</html>