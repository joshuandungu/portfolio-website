<?php
session_start();
session_unset();
session_destroy();

?>
<?php include ('includes/connection.php');?>
<?php include('includes/header.php');?>
<main>
<div class="sidebar">
    <a href="index.php">home</a>
    <a href="#">about</a>
    <a href="#">blog</a>
    <a href="#">contact</a>
</div>
<h1>You logged out successfully</h1>
<button><a href="login.php">login</a></button>
<button><a href="signup.php">Signup</a></button>
</main>
<?php include ('includes/footer.php'); ?>