<?php
$msg = '';

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('includes/connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the user exists
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    if ($result) {
        $msg = "Logged in successfully";
        session_start();
        $_SESSION['username'] = $username;
        header('location:index.php');
    } else {
        $msg = "Failed to login";
        header('location:login.php');
    }
}
?>

<?php include('./includes/header.php'); ?>
<main>
    <div class="sidebar">
        <a href="index.php">home</a>
        <a href="#">about</a>
        <a href="#">blog</a>
        <a href="#">contact</a>
    </div>

    <form id="sampleForm" method="POST" action="login.php">
        <p style="font-size: 16px; color:red; text-align:center;"><?php if ($msg) { echo $msg; } ?></p>
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">

        <label for="Password">Password</label>
        <input type="password" name="password" class="form-control" id="Password" placeholder="Enter your Password">

        <button type="submit" value="submit">Submit</button>
        <button><a href="signup.php">Signup</a></button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</main>
<?php include('includes/footer.php'); ?>
