<?php
    require_once('db.class.php');
    //Resgatar informações filtradas
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = md5($_POST['password']);

    // Linkar ao db
    $db = new db;
    $link = $db->connect_mysql();
    $sql = "INSERT INTO student(name, email, password) VALUES ('$name', '$email', '$password')";

    mysqli_query($link, $sql) or die("Erro ao efetuar o cadastro!");
    header('Location: index.php');
?>