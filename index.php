<?php
// ouvrir une session
session_start();
if (isset($_SESSION['id'])) {
    header('location: admin.php');
} else {
    header('location: login.php');
}
