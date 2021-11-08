<?php
session_start();

$uname   = $_POST['username'];
$pass = $_POST['password'];

$_SESSION['uid'] = $uname;
?> <script> location.href='new.php' ; </script> <?php

?>
