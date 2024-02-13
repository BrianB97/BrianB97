<?php include 'header.php';?>

<?php
session_start();
if(isset($_POST['submit'])){
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $sql = "SELECT ID , username, password FROM member WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
        $validPassword = password_verify($passwordAttempt, $user['password']);
        //$validPassword = ( $user['password'] == $passwordAttempt );
        if($validPassword){
            $_SESSION['ID'] = $user['username'];
            $_SESSION['logged_in'] = time();
            $_SESSION['username'] = $username;
            header("Location: aangemeld/Homepage.php");
            exit();
        }else{
            header("Location: account.php");
        }
    }

}
?>


<form class="login100-form validate-form" method="POST">
		<span class="login100-form-title">
			Login
		</span>
    <!-- Login form -->
    <div class="form-group">
        <label class="sr-only" for="form-username">username</label>
        <input type="text" name="username" placeholder="username" class="form-username form-control" id="form-username">
    </div>
    <div class="form-group">
        <label class="sr-only" for="form-password">Password</label>
        <input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
    </div>
    <input type="submit" name="submit" value="Login" class="login100-form-btn" >
    <!-- Code -->
   
    <div class="text-center p-t-80">
        <a class="txt2" href="register.php">
            Make an account?

        </a>
    </div>
    <!-- Code -->
    <!-- Einde login form -->
</form>
   
<?php include 'footer.php';?>