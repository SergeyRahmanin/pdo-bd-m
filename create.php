<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Добавление пользователя</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Создать пользователя</h3>

            <div class="row">
                <div class="col-md-6">
                    <form action="store.php" method="post">
                        <input type="text" name="name" class="form-control">
                        <input type="text" name="email" class="form-control">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>