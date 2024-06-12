<?php
include_once('connection.php');

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];

if (empty($id_user)) {
    // Insert data baru
    $statement = $conn->prepare('INSERT INTO user (username, first_name, last_name, gender)
                                 VALUES (:username, :first_name, :last_name, :gender)');
    $statement->execute([
        'username' => $username,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'gender' => $gender
    ]);
}

header('Location: db.php');
exit;
?>
