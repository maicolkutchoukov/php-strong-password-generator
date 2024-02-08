<?php

include './function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        La tua password super-sicura è questa:
    </h1>
    <p>
        <?php  
            echo generaPassword($_GET['password_length'])
        ?>
    </p>
    
</body>
</html>