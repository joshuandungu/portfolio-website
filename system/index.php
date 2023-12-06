<?php 
session_start();
error_reporting(0);
include('includes/connection.php');
if (strlen($_SESSION['username']  == 0)) {
  header('location:logout.php');
  }
  ?>

<? include ('includes/header.php');?>
        <main>
            <div class="sidebar">
                <a href="index.php">home</a>
                <a href="#">about</a>
                <a href="#">blog</a>
                <a href="#">contact</a>
            </div>
            <h1>what's new today</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos similique ut recusandae, a est molestiae ex ipsa quidem eum autem, necessitatibus magnam provident enim, nesciunt non commodi excepturi sed iste?</p>

        </main>
<?php include ('includes/footer.php');?>
        