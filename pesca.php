<?php
    include_once("inc/showdata.inc.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-wrapper">
        <form action="inc/pesca.inc.php" method="post">
            <input type="number" name="quantidade" placeholder="quantidade (kg)">
            <input type="number" name="data" placeholder="data">
            <input type="number" name="hora" placeholder="hora de chegada">
            <input type="submit">
        </form>
    </div>
    <?php 
        echo mostrardados();
    ?>
</body>
</html>