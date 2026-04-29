<?php
// login.php
$pageTitle = 'Login';
require 'inc/header.inc.php';
require_once 'inc/db_connect.inc.php';

// Check if request method is post and get data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = hash('sha512', $_POST['password']);

    // Query the database
    $sql = "SELECT * FROM user WHERE email=:email AND password=:password LIMIT 1";

    $stmt = $db->prepare($sql);
    $stmt->execute(["email" => $email, "password" => $password]);

    // If a match is found, start the session otherwise say invalid user credentials
    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch();
        session_start();
        $_SESSION["is_logged_in"] = 1;
        $_SESSION["first_name"] = $row->first_name;
        header("Location: home.php");
    } else {
        echo "Invalid user credentials";
    }
}

?>

<form action="login.php" method="POST">
    <label for="email">Email</label>
    <br><br>
    <input type="email" name="email" id="email" required>
    <br><br>
    <label for="password">Password</label>
    <span id="showPassword" onclick="showPassword();">Show Password</span>
    <br><br>
    <input type="password" name="password" id="password" required>
    <br><br>
    <input type="submit" value="Login">
</form>

<script src="js/script.js"></script>

<?php require 'inc/footer.inc.php'; ?>