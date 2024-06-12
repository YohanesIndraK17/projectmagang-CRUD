<?php

    include_once('connection.php');

    $id_user = $_GET['id_user'];

    $statement = $conn->prepare('DELETE FROM user WHERE id_user=:id_user');                             
    $statement->execute([
        'id_user' => $id_user
    ]);

    header('location: db.php');