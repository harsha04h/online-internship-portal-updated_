<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use mysqli_real_escape_string to prevent errors with special characters
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = $_POST["password"];

    // Added BINARY to force case-sensitivity for the username
    $query = "SELECT * FROM users WHERE BINARY username='$username'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the hashed password from the database
        if (password_verify($password, $user["password"])) {
            $_SESSION["username"] = $user["username"];
            
            // Note: Ensure your database column is named 'name' or 'fullname'
            $_SESSION["fullname"] = $user["name"];

            header("Location: homepage.html");
            exit();
        }
    }

    // Redirect back to index.html with the error parameter if casing or password is wrong
    header("Location: index.html?error=1");
    exit();
}
?>