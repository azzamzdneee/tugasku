<?php
ob_start();

session_start();

include 'connection.php';

session_destroy();

header("location: /");
?>