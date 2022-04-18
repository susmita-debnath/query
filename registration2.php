<?php 
	include "lib/library.php";
	global $con;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Here</title>
	<link rel="stylesheet" type="text/css" href="css/design.css?<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/png" href="assets/img/logo.png">
</head>
<body>
	<div id="reg">
		<h1>Sign Up Here</h1>
		<div id="error">
			<?php 
				if ( isset($_POST['signup']) ) {

					foreach ($_POST as $key => $value) $$key = $value;
					$s_img = time() . $_FILES["fileToUpload"]["name"];
					$valid = 1;

					if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
						$message = "Invalid email!";
						echo $message; ?><br><?php
						$valid = 0;
					}

					if ( $password != $retype ) {
						$message = "Password is not same";
						echo $message;?><br><?php
						$valid = 0;
					}

					$password = md5($_POST['password']);

					
					if ( id_exists( $id ) ) {
						echo "Invalid Id";
						$valid = 0;
					}

					if ( $valid == 1 ) {
											
						$query = "INSERT INTO student (`email`, `id`, `name`, `password`, `s_img`) VALUES ('$email', '$id', '$name', '$password', '$s_img')";
						$a = mysqli_query($con, $query);
						id_identify($id);
						
						$pic = "uploads/";
						$picture = $pic . $s_img;

						move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $picture);
						header("Location:index.php");
					}
				}
			?>
		</div>
		<form action="registration2.php" method="post" enctype="multipart/form-data">
			<input type="text" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"><br><br>
			<input type="text" name="id" placeholder="ID" value="<?php echo isset($_POST['id']) ? $_POST['id'] : '' ?>"><br><br>
			<input type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"><br><br>
			<input type="password" name="password" placeholder="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"><br><br>
			<input type="password" name="retype" placeholder="Retype Password" value="<?php echo isset($_POST['retype']) ? $_POST['retype'] : '' ?>"><br>
			<h3>Select your profile photo:</h3><br>
				<input type="file" name="fileToUpload" id="fileToUpload" align="center"><br><br>
			<input type="submit" name="signup" id="btn" value="Sign Up">
		</form>
	</div>
</body>
</html>
<?php echo $valid; ?>