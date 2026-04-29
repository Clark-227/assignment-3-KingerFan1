<?php
// home_old.php (version using header/footer includes + AJAX logout via script.js)

// TODO 1: Start the session

$pageTitle = 'Home';
require 'inc/header.inc.php';
?>

<a href="register.php">Register</a>
<a href="login.php" id="login">Login</a>
<a href="" id="logout">Logout</a>

<h1>Welcome to our great site <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User!' ?></h1>
<div id="message"></div>
<script src="js/script.js"></script>

<?php require 'inc/footer.inc.php' ?>