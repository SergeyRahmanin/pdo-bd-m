<?php
    require 'bd.php';
    $sql = 'DELETE FROM users WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);
    header('Location: ./index.php');
?>
