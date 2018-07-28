<!--
Made by Zua @ https://githhub.com/thatziv
-->

<?php
	
	//init
	session_start();

	include 'inc/config.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		$name = $_POST["name"];
		$password = strtolower( $_POST["password"]);
		
		//IF NAME OR PASSWORD IS EMPTY STOPS LOGIN PROCCES
		if (empty($name)) {
			echo '<h5 class="padd red">Please enter a username<font color="white"></h5>';
		} elseif (empty($password)) {
			echo '<h5 class="padd red">Please enter a password<font color="white"></h5>';
			
		} else {
			check_user($name, $password);
		}
	}
	
	
?>

<!DOCTYPE html>
<html>
  <head>
  <?php include 'inc/head.php' ?>
   <?php echo $footer ?>
        </div>
  </head>


<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- For some reason jquery wasnt working in core.php so i just put it up here -->
	<?php include 'inc/preloader.php' ?>
 <div class='container center'>
 
<h1>Log in to <?php echo $title ?></h1>
<img class='smal' src=<?php echo $ServerLogo ?>>
<!--SUBMIT FORM-->
	<form action="" method="POST">
	
	
		<div>

		Username: 
		<br>
		<input type="text" name="name"> <br> 

		Password:
		 <br>
		<input type="password" style="margin-bottom:10px;" name="password">	<br> 

		<button class="btn-large big" type="submit" value="Log In">Log in</button>

		</div>
	
	
	</form>

<!-- PHP -->
<?php
//Essential mode uses the Users table by default. Change the "users" below if you want to use a different table. If you do this, YOU HAVE TO CHANGE THE ROWS FOR BOTH THE MYSQL FETCH AND THE COLUMN NAMES.

	function check_user($name, $password) {
	include 'inc/config.php';
	//CREATE CONNECTION
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassowrd, $dbName);

	//CHECK CONNECTION
	if ($conn->connect_error) {
		die("Connection Failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT name FROM users WHERE name='$name'";
	$result = $conn->query($sql);	
	
	if($result->num_rows == 0) {
		echo '<h5 class="padd red">Wrong Username<font color="white"></h5>';
	} else {
		$sql = "SELECT name FROM users WHERE password = '$password'";
		$result = $conn->query($sql);	
			
		if($result->num_rows == 0) {
			echo '<h5 class="padd red">Wrong Password<font color="white"></h5>';
		} else {
			//LOGIN:
			$_SESSION['name'] = $name;		
			echo '<h5 class="padd green">Login Successful<font color="white"></h5>';
			header( "refresh:1;url=index.php" );
		}
			
	}
	
	// close that conn homie
	$conn->close();
	}
	
	
?>
</div>
<?php include 'inc/core.php'?>

</body>
</html>
