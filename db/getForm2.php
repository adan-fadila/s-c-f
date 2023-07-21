<?php
include "db.php";
session_start();
$doctor_id = $_SESSION["id"];
$patient_id = $_POST["patient_id"];
$diagnosis = $_POST["diagnosis"];
$meals = $_POST["treatment"];
$dueDate = date("Y-m-d", strtotime("+1 Months"));
$query = "INSERT INTO tbl_225_treatments (doctor_id, treatment, diagnosis, patient_id, start_date, due_date) 
   VALUES ('$doctor_id', '$meals', '$diagnosis', '$patient_id', now(), $dueDate)";
$addTreatment = mysqli_query($con, $query);
if ($addTreatment === true) {
    echo "Success add request";
}
mysqli_close($con)
?>