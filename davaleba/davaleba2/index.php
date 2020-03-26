<?php
    include "work1.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <input type="submit" name="klikunia" value="daachire rom gamovides cxrili">
        <input type="number" name="M">
        <input type="number" name="N">
    </form>

    <?php
        if(isset($_POST["klikunia"])){
            echo generateRandomTable();
        }
        
    ?>

    
</body>
</html>