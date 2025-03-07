<?php
session_start();
include 'jwt.php';
if (isset($_SESSION['jwt']) && verify_jwt($_SESSION['jwt'])) {
    echo "Flag: CTF{JWT_BYPASS_SUCCESS}";
} else {
    echo "Access Denied";
}
?>