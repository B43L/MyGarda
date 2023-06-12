<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=MyGarda', 'root', '');

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect the user to the home page
    header('Location: /');
    exit;
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the input
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // Check if the username is already taken
        $username = $_POST['username'];
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $db->query($sql);
        if ($result->rowCount() === 0) {
            // The username is not taken, so create the user
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $db->query($sql);

            // Redirect the user to the home page
            header('Location: /');
            exit;
        } else {
            // The username is already taken, so show an error message
            echo '<p>The username is already taken.</p>';
        }
    } else {
        // The input is not valid, so show an error message
        echo '<p>Please enter all of the required information.</p>';
    }
}

?>

<h2>Create an Account</h2>

<form action="update-sys.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Create Account">
</form>
