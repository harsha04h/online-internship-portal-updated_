<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, username, password)
              VALUES ('$name', '$email', '$username', '$hashedPassword')";

    if (mysqli_query($conn, $query)) {
        // Change this from login.html to index.html
        header("Location: index.html");
        exit();
    } else {
        echo "Registration failed: " . mysqli_error($conn);
    }
}
?>