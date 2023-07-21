<?php
include 'db.php';

$query = "select * from tbl_225_diagnosis; ";
$diagnosisData = mysqli_query($con, $query);
$diagnosisOptions = "";
while ($row = mysqli_fetch_assoc($diagnosisData)) {
    $diagnosisOptions = $diagnosisOptions . "<option  value=" . $row["diagnosis"] .
      ">" . $row["diagnosis"] . "</option>";
  }
?>