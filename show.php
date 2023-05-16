<?php
    require 'connect.php';
    $sql = 'SELECT * FROM users WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Просмотр пользователя</title>
</head>
<body>
<div class="container">
    <h1>Просмотр пользователя</h1>
    <a href="index.php" class="btn btn-info">На главную</a>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Действие</th>
                </thead>

                <tbody>
                <?php foreach ($users as $user):?>
                    <tr>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td>
                            <a href="#" class="btn btn-warning">Редактирование</a>
                            <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-danger">Удаление</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>
