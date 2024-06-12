<?php 

    include_once("connection.php");

    $statement = $conn->prepare('SELECT * FROM user WHERE id_user=:id_user');
    $statement->execute([
        'id_user' => $_GET['id_user']
    ]);
    
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
?>
 <title>SoloAbadi.com</title>
<link rel="stylesheet" href="styles.css">
<div class="wrapper">
	<div class="registration_form">
	<div class="title">
			Edit Data User
		</div>
		
    <form action="update.php?id_user=<?php echo $_GET['id_user']; ?>" method="post">
			<div class="form_wrap">
				<div class="input_wrap">
					<label for="nama">Username</label>
					<input type="text" Name="username" placeholder="username" value="<?php echo $user['username']; ?>">
				</div>
                <div class="input_wrap">
					<label for="first_name">First Name</label>
					<input type="text" Name="first_name" placeholder="first_name" value="<?php echo $user['first_name']; ?>">
				</div>
				<div class="input_wrap">
					<label for="last_name">Last Name</label>
					<input type="text" Name="last_name" placeholder="last_name" value="<?php echo $user['last_name']; ?>">
				</div>
				<div class="input_wrap">
                    <label for="gender">Gender</label>
                    <select name="gender" required>
                        <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                    </select>
                </div>
				<div class="input_wrap">
					<input type="submit" value="Update" class="submit_btn">
				</div>
			</div>
    </div>
</div>
		</form>



