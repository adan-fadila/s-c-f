<?php
include 'db.php';
session_start();
$id = $_SESSION["id"];
$name = $_SESSION["name"];
$query = "select * from tbl_225_users where pid = " . $id . ";";
$userResult = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($userResult);
?>