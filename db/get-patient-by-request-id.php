<?php
include 'db.php';
$query = "select * from tbl_225_users join tbl_225_request on tbl_225_users.pid = tbl_225_request.patient_id where tbl_225_request.id =9 ;";
$patientData = mysqli_query($con, $query);
