<?php
// Include your database connection file here
include('includes/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $gender = $_POST['gender'];
    $zipcode = $_POST['zipcode'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    // Check if the user already exists
    $checkUserQuery = "SELECT * FROM users WHERE email = '$email'";
    $checkUserResult = mysqli_query($conn, $checkUserQuery);

    if (mysqli_num_rows($checkUserResult) > 0) {
        // User with this email already exists
        echo "User with this email already exists. Please use a different email.";
    } else {
        // Insert data into the users table
        $insertUserQuery = "INSERT INTO users (firstname, lastname, email, username, password, gender, zipcode, address, city, state)
                            VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$gender', '$zipcode', '$address', '$city', '$state')";
        $query = mysqli_query($conn, $insertUserQuery);

        if ($query) {
            // Redirect to a success page
            header('Location: index.php');
            exit(); // Ensure script stops after redirect
        } else {
            // Log the error or handle it appropriately
            error_log("Error: " . mysqli_error($conn));
            echo "Registration failed. Please try again later.";
        }
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the form if accessed directly
    header('Location: index.php');
}
?>




<?php include('includes/header.php'); ?>
<main>
    <div class="sidebar">
        <a href="index.php">home</a>
        <a href="#">about</a>
        <a href="#">blog</a>
        <a href="#">contact</a>
    </div>


    <h2>User Registration Form</h2>
    <form action=" " method="post">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control"  id="firstname"name="firstname" placeholder="Enter your first name" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" placeholder="Enter your last name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>

        <label for="zipcode">Zipcode:</label>
        <input type="text" name="zipcode" id="zipcode" placeholder="Enter your address" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address"  id="address" placeholder="Enter your address"required><br>

        <label for="city">City:</label>
        <input type="text" name="city" id="city"  placeholder="Enter your city " required><br>

        <label for="state">State:</label>
        <input type="text" name="state"  id="state"  placeholder="Enter your city State" required><br>

        <button type="submit">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</main>
<?php include('includes/footer.php'); ?>