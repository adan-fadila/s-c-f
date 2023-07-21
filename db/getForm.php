<?php
include "db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_SESSION["id"];
    $diagnosis = $_POST["diagnosis1"];
    $method = $_POST["method"];
    $allergies = $_POST["allergies"];
    $preferFood = $_POST["preferFood"];
    $workdays = $_POST["workdays"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $comments = $_POST["comments"];
    $vegeterians = true;
    $query = "INSERT INTO tbl_225_request (patient_id, method, diagnosis, allergies, prefers, weight, height, vegeterian, comments) 
   VALUES ('$id', '$method + 1', '$diagnosis', '$allergies' , '$preferFood' , '$weight' , '$height' , '$vegeterians' , '$comments')";

    $addRequest = mysqli_query($con, $query);
    if ($addRequest === true) {
        echo "Success add request";
    }
} else {
    echo "Add treatment fault";
}
?>
