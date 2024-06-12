<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SoloAbadi.com</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="wrapper">
    <div class="registration_form">
        <div class="title">
            Form Data User
        </div>
        <?php 
            if (isset($_GET['id_user'])) {
                include_once("connection.php");

                $statement = $conn->prepare('SELECT * FROM user WHERE id_user=:id_user');
                $statement->execute([
                    'id_user' => $_GET['id_user']
                ]);

                $user = $statement->fetch(PDO::FETCH_ASSOC);
            } else {
                $user = ['username' => '', 'first_name' => '', 'last_name' => '', 'gender' => ''];
            }
        ?>
        <form action="store.php" method="post">
            <div class="form_wrap">
                <input type="hidden" name="id_user" value="<?php echo isset($user['id_user']) ? $user['id_user'] : ''; ?>">
                <div class="input_wrap">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
                </div>
                <div class="input_wrap">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" placeholder="Masukkan First Name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
                </div>
                <div class="input_wrap">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" placeholder="Masukkan Last Name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
                </div>
                <div class="input_wrap">
                    <label for="gender">Gender</label>
                    <select name="gender" required>
                        <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                    </select>
                </div>
                <div class="input_wrap">
                    <input type="submit" value="Simpan" class="submit_btn">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
