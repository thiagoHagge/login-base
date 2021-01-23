<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header('Location: index.php?erro=2');
    }
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Bem vindo <?=$_SESSION['name']?></h1>
        <a href="sair.php"><button>Sair</button></a>
    </body>
</html>