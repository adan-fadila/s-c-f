<?php
session_start();
$id = $_SESSION["id"];
$name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bfd6d1b072.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/add_treatment.css">
    <script src="./js/add_treatment.js"></script>
    <script src="./js/doctoraddajax.js"></script>
</head>
<body>
<header>
    <a id="logo" href="#"></a>
    <nav>
        <ul class="d-web-nav-list">
            <li class="web-nav-list-item"><a href="#">Home</a></li>
            <li class="web-nav-list-item"><a href="#">Patients List</a></li>
            <li class="web-nav-list-item"><a href="#">Requests</a></li>
        </ul>
    </nav>
    <div class="header-right">
        <img class="img" src="images/profile.png" alt="profile" title="profile">
    </div>
</header>

<main>
    <div class="tables">
        <section class="patient-details">
            <h3>Patient</h3>
            <div class="details-col">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">id</th>
                        <th scope="col">mail</th>
                        <th scope="col">gender</th>
                        <th scope="col">allergies</th>
                        <th scope="col">diagnosis</th>
                        <th scope="col">preferred food</th>
                        <th scope="col">comments</th>
                    </tr>
                    </thead>
                    <tbody class=".table-hover">
                    <?php
                    include "db/get-patient-by-request-id.php";
                    while ($data = mysqli_fetch_assoc($patientData)) {
                        echo '<tr>
                                    <td>' . $data["fullName"] . '</td>
                                    <td >' . $data["id"] . '</td>
                                    <td >' . $data["Email"] . '</td>
                                    <td >' . $data["gender"] . '</td>
                                <td>' . $data["allergies"] . '</td>
                                <td>' . $data["diagnosis"] . '</td>
                                <td >' . $data["prefers"] . '</td>
                                <td >' . $data["comments"] . '</td>';
                    }
                    mysqli_free_result($patientData);
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div>
        <i id="open-lightbox" class="fa-solid fa-circle-plus add-btn" style="color: #9bc3f1;"></i>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="upper">
                    <span id="close" class="close cursor">&times;</span>
                    <div class="t">
                        <a href="#" class="add">&plus;</a>
                    </div>
                </div>

                <form id="plan-form" method="post">
                    <div id="plan" class="plan">
                    </div>
                    <?php
                    include "db/get-patient-by-request-id.php";
                    $data = mysqli_fetch_assoc($patientData);
                    $patient_id = $data["patient_id"];
                    $diagnosis = $data["diagnosis"];
                    echo '<input hidden name="patient_id" value="' . $patient_id . '">
                                <input hidden name="diagnosis" value="' . $diagnosis . '">';
                    mysqli_free_result($patientData);
                    ?>
                    <input type="submit" id="submit">
                </form>
            </div>

        </div>

    </div>

</main>
</body>
</html>
