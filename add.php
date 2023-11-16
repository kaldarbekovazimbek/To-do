<?php

$task = $_POST['task'];
if ($task == "") {
    echo "Введите задание";
    exit();
}

require 'configDB.php';

$sql = 'INSERT INTO `list`(`task`) VALUES(:task)';

$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /');