<?php
    require 'connect.php';
    $sql = 'UPDATE users SET name=:name, email=:email WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);
    header('Location: ./index.php');