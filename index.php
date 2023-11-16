<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do list</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Список дел:</h1>
    <form action="/add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
        <button type="submit" name="sendTesk" class="btn btn-success">Отправить</button>
    </form>

    <?php
    require_once 'configDB.php';
    echo '<ul>';
    $query = $pdo->query("SELECT * FROM list");
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>' . $row->task . '</b></li>';
    }
    echo '<ul>';
    ?>
</div>
</body>
</html>
