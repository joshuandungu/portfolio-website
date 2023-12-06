<?php 
include('includes/header.php'); ?>

<main>
<div class="sidebar">
    <a href="index.php">home</a>
    <a href="#">about</a>
    <a href="#">blog</a>
    <a href="#">contact</a>
</div>


<form id="sampleForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" encytpe="multipart/form-data">
    <div class="form-group">
        <b><label for="Degree/ Course">Degree/course/Diploma studied</label></b>
        <input type="text" name="degree" class="form-control" id="degree" placeholder="Enter your degree studied" required>
    </div>
    <div class="form-group">
        <b> <label for="time">Time/timespan taken to study</label></b>
        <input type="text" name="period" class="form-control" id="period" placeholder="Enter study period" required>
    </div>
    <div class="form-group">
        <b> <label for="time">Institution studied</label></b>
        <input type="text" name="institution" class="form-control" id="institution" placeholder="Enter school/university of study" required>
    </div>
    <div class="form-group">
        <b><label for="time">Choose to color your resume</label></b>
        <input type="file" name="resume_image" class="form-control" id="image" required>
    </div>
    <div class="form-group">
        <b> <label for="time">Upload Details about you studies</label></b>
        <textarea type="text" name="description" id="period" placeholder="Enter study period" required rows="6" cols="149" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</main>

<?php include('includes/footer.php'); ?>
<?php
session_start();
error_reporting(0);
include('includes/connection.php');
if (strlen($_SESSION['username']  == 0)) {
  header('location:logout.php');
  } else{
require('includes/connection.php');
if (isset($_POST['submit'])) {
    if (empty($_POST['degree']) || empty($_POST['period']) || empty($_POST['institution']) || empty($_POST['resume_image']) || empty($_POST['description'])) {
        echo "<script>alert('Ensure all fields in the form are not empty');</script>";
    } else {
        $degree = $_POST['degree'];
        $period = $_POST['period'];
        $institution = $_POST['institution'];
        $description = $_POST['description'];
        $image = $_FILES['resume_image'];
        $image_name = $image['name'];
        $image_name = $image['tmp_name'];
        $destination = "includes/images/" . $image_name;


        $folderPath = "includes/images"; // Replace with the desired folder path

        // Check if the folder exists
        if (!is_dir($folderPath)) {
            // Create the folder if it does not exist
            if (mkdir($folderPath, 0777, true)) {
                echo "Folder created successfully!";
                move_uploaded_file($image_tmp_name, $destination);
            } else {
                echo "Error creating folder!";
            }
        } else {
            echo "Folder already exists!";
        }

        $sql = mysqli_query($conn, "INSERT INTO  resume (degree,period,institution,image, description) VALUES
('$degree', '$period', '$institution','$image_name','$description')");
        if ($sql) {
            echo "<script>alert('Data inserted successfully');</script>";
            header('location:index.php');
        } else {
            echo "Failed to upload data";
        }
    }
}
  }
?>