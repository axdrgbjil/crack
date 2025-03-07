<?php
include 'jwt.php';
if ($_POST['username'] == 'admin' && $_POST['password'] == 'password123') {
    $jwt = generate_jwt(['user' => 'admin']);
    session_start();
    $_SESSION['jwt'] = $jwt;
    header('Location: flag.php');
} else {
    echo "Invalid credentials";
}
?>