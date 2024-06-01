<!DOCTYPE html>
<html>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
        and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: After_Login.php");
		}else{
			echo "<div class='form'>
                <h3>Username/password is incorrect.</h3>
                <br/>Click here to <a href='Login.html'>Login</a></div>";
	}
    }else{
?>
<main class="main">
        <div class="loginContainer">
            <form action="Login.php" method="post">
                <p id="login-text">Login</p>
            <div class="input-box">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" placeholder="Email or Phone" required>
            </div>
            <div class="input-box">
                <label for="password">Password:</label>
                <input type='password' name="password"  id='password' placeholder="Password" required>
            </div>
            <div class="input-box">
                <button type="submit" id="submit" onclick="return on()">Login</button>
            </div>
            <div id="signUp">
                <p>Don't have an account?<a href="SignUp.html" id="signup">SignUp</a></p>
            </form>
            </div>
        </div>
    </main>
<?php 
exit();}?>

</html>