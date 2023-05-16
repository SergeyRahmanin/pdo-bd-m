<?php
    require 'bd.php';
    $sql = 'INSERT INTO users (`name`, `email`) VALUES (:name, :email)';
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);
    header('Location: ./index.php');
?>
