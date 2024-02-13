<?php include 'header.php';?>

<?php
if (isset($_POST['submit'])) {
	session_start();
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
	}
	if (isset($_POST['firstname'])) {
		$firstname = $_POST['firstname'];
	}
	if (isset($_POST['lastname'])) {
		$lastname = $_POST['lastname'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	$information =
		$username &&
		$firstname &&
		$lastname &&
		$email &&
		$password;
	if (isset($_POST["username"])) {
		if (empty($username)) {
			echo "Please fill in your username <br>";
		}
	}
	if (isset($_POST["firstname"])) {
		if (empty($firstname)) {
			echo "Please fill in ypur firstname <br>";
		}
	}
	if (isset($_POST["lastname"])) {
		if (empty($lastname)) {
			echo "Please fill  your lastname <br>";
		}
	}
	if (isset($_POST["email"])) {
		if (empty($email)) {
			echo "Please fill in your email <br>";
		}
	}
	if (isset($_POST["password"])) {
		if (empty($password)) {
			echo "Please fill in your password <br>";
		}
	}
	if (!empty($information)) {
		$stmt = $conn->prepare("SELECT firstname FROM member WHERE firstname = :firstname");
		$stmt->bindParam(':firstname', $firstname);
		$stmt->execute();
		$db_query = "INSERT INTO `member`(
            `username`,
            `firstname`,
            `lastname`,
            `email`,
            `password`)
            VALUES(
            :username,
            :firstname,
            :lastname,
            :email,
            :password)";
		$db_result = $conn->prepare($db_query);
		$add_to_db = $db_result->execute(array(
			":username" => $username,
			":firstname" => $firstname,
			":lastname" => $lastname,
			":email" => $email,
			":password" => password_hash($password, PASSWORD_DEFAULT)
		));
	}
}
?>


<form class="login100-form validate-form" method="POST">
		<span class="login100-form-title">
			Register
		</span>


    <div class="wrap-input100 validate-input" data-validate=" ">
        <input class="form-username form-control" type="text" name="username" placeholder="username">
        <span class="focus-input100" data-placeholder="username"></span>
    </div>


    <div class="wrap-input100 validate-input" data-validate=" ">
        <input class="form-username form-control" type="text" name="firstname" placeholder="firstname">
        <span class="focus-input100" data-placeholder="firstname"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="">
        <input class="form-username form-control" type="text" name="lastname" placeholder="lastname">
        <span class="focus-input100" data-placeholder="lastname"></span>
    </div>


    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
        <input class="form-username form-control" type="text" name="email" placeholder="E-mail">
        <span class="focus-input100" data-placeholder="email"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="password verplicht">
        <input class="form-username form-control" type="password" name="password" placeholder="password">
        <span class="focus-input100" data-placeholder="password"></span>

    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn" name="submit">
            Register
        </button>
    </div>

      <div class="text-center p-t-80">
        <a class="txt2" href="account.php">
            Already have an account?
           
        </a>
    </div>
</form>
   
<?php include 'footer.php';?>