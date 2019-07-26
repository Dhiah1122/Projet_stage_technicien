<?php
$server = 'localhost';
$db     = 'employee-db';
$user   = 'root';
$pass   = '';


$link = mysqli_connect ("$server","$user","$pass", "$db") or die ( " Not able to connect to database ");