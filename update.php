<?php

    include_once('connection.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_user = $_GET['id_user'];
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
    
        // Query untuk mengupdate data
        $query = "UPDATE user SET username=:username, first_name=:first_name, last_name=:last_name, gender=:gender WHERE id_user=:id_user";
        $statement = $conn->prepare($query);
    
        // Eksekusi query dengan data yang diterima dari form
        if ($statement->execute([
            ':username' => $username,
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':gender' => $gender,
            ':id_user' => $id_user
        ])) {
            echo "Data berhasil diupdate.";
        } else {
            echo "Gagal mengupdate data.";
        }
    } else {
        echo "Metode pengiriman tidak valid.";
    }

    header('location: db.php');