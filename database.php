<?php
// register php
$conn = new mysqli('localhost', 'root', '', 'contact_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    if ($conn->query("INSERT INTO register (username, password) VALUES ('$username', '$password')")) {
        echo "<script>alert('Registration successful. Please login.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "')</script>";
    }
}

// login php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $result = $conn->query("SELECT * FROM register WHERE username='$username'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['username'] = $username;
            header('location:index2.php');
        } else {
            echo "<script>alert('Invalid password.'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('No user found with that username.'); window.location.href = 'login.php';</script>";
    }
}
?>
