<?php 
session_start();
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'reset_password') {
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if new password and confirm password match
    if ($new_password !== $confirm_password) {
        $_SESSION['error'] = 'New password and confirm password do not match.';
        header('Location: forgot_password.php');
        exit;
    }

    // Hash the new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $sql = "UPDATE users SET password_hash = '$hashed_password' WHERE username = '$username'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = 'Your password has been reset successfully.';
    } else {
        $_SESSION['error'] = 'Password reset failed. Please try again later.';
    }

    header('Location: forgot_password.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="Assets/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Forgot Password</h2>
        <?php 
            if(isset($_SESSION['error'])) {
                echo '<p style="color:red;">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['success'])) {
                echo '<p style="color:green;">'.$_SESSION['success'].'</p>';
                unset($_SESSION['success']);
            }
        ?>
        <form action="forgot_password.php" method="POST">
            <input type="hidden" name="action" value="reset_password">
            <div class="input-group">
                <label for="username">Enter your username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility('new_password')">👁️</span>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility('confirm_password')">👁️</span>
            </div>
            <button type="submit">Reset</button>
        </form>
        <p>Already have an account? <a href="index.php" id="login-link">Login</a></p>
    </div>
    <script>
        function togglePasswordVisibility(inputId) {
            var passwordField = document.getElementById(inputId);
            var eyeIcon = passwordField.nextElementSibling;
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.textContent = "👁️";
            } else {
                passwordField.type = "password";
                eyeIcon.textContent = "👁️";
            }
        }

        document.getElementById("register-link").addEventListener("click", function(event) {
            event.preventDefault();
            document.querySelector(".login-container").style.display = "none";
            document.querySelector(".register-container").style.display = "block";
        });
        document.getElementById("login-link").addEventListener("click", function(event) {
            event.preventDefault();
            document.querySelector(".register-container").style.display = "none";
            document.querySelector(".login-container").style.display = "block";
        });
    </script>
</body>
</html>