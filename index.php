<?php
session_start();
if (isset($_SESSION['jwt'])) {
    header('Location: flag.php');
    exit();
}
?>
<html>
<head><title>JWT Login</title></head>
<body>
<h1>Login</h1>
<form method="POST" action="login.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
<a href="source.php">View Source</a>
</body>
</html>