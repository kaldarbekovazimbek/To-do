<?php
$task = $_POST['task'];
if ($task == "") {
    echo "Введите задание";
    exit();
}

$dsn = 'mysql:host=127.0.0.1; dbname=to_do';
$pdo = new PDO($dsn, 'root', "");

$sql = 'INSERT INTO `list`(`task`) VALUES(:task)';

$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /');