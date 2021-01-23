<?php
    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            if($erro == 2) {
                echo 'Faça o login novamente';
            }
        ?>
        <form method="post" action="valida-user.php" >
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Insira seu email"><br><br>
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Insira seu email"><br><br>
            <input type="submit">
        </form>
        <?php
            if($erro == 1) {
                echo 'Usuário ou senha inválido';
            }
        ?>
        <a href="cadastro.php">Cadastre-se</a>

    </body>
</html>