<?php
session_start();
if (isset($_SESSION['id'])) {
    $id        = $_SESSION['id'];
    $nom       = $_SESSION['nom'];
    $prenom    = $_SESSION['prenom'];
    $username  = $_SESSION['username'];
    $password  = $_SESSION['password'];
    $mariee    = $_SESSION['mariee'];
    $ne        = $_SESSION['ne'];
    $age       = $_SESSION['age'];
    $dd_login  = $_SESSION['dd_login'];
    $logged_in = $_SESSION['logged_in'];


    if (isset($_GET['id'])) {
        $id_emp = $_GET['id'];
        require "./config.php"; // Database connection string
        $sql = "DELETE FROM `employee` WHERE `id_employee` = '$id_emp'";
        $result = mysqli_query($link, $sql);
        if (!mysqli_query($link, $sql)) {
            echo mysqli_error($link);
        } else {
            header('Location: list_employee.php');
        }
        mysqli_close($link);
    }
}