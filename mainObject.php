<?php include "db/db.php";
include "global.php";
session_start();
$id = $_SESSION["id"];
$name = $_SESSION["name"];
if (isset($_GET['treatmentId'])) {
    $treatmentId = $_GET['treatmentId'];
    $treatmentId = str_replace('.php', '', $treatmentId);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>treatment</title>
    <?php addLinks(); ?>
    <link rel="stylesheet" href="css/mainObjectStyle.css">

</head>

<body>
<header>
    <a href="#" id="logo"> </a>

    <div class="web-nav">
        <ul class="web-nav-list">
            <li class="web-nav-list-item"><a href="./index.php">Home</a></li>
            <li class="web-nav-list-item"><a href="./treatmintList.php">Treatments List</a></li>
            <li class="web-nav-list-item"><a href="./request_treatment.php">New Treatment Request</a></li>
        </ul>
    </div>
    <div class="header-right"></div>
    <?php hum_patient($name); ?>
</header>

<div class="up">
    <h1>Treatment <?php echo $treatmentId; ?> plan</h1>
    <h1>
        <?php $today = date("m.d.y");
        echo $today; ?>
    </h1>
</div>


<div class="container m-2 d-flex gap-2" action="#">
    <?php
    // Query to retrieve JSON data from the JSON data type column
    $query = "SELECT treatment FROM tbl_225_treatments WHERE id = " . $treatmentId;// Replace 'id = 1' with your desired condition

    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {

        $json_data = $row['treatment'];
        $data = json_decode($json_data, true);
        foreach ($data as $key => $valueArray) {
            echo '<div class="card" style="width: fit-content">';
            echo '<div class="card-body">';
            echo "<h5>$key</h5>";
            echo '<ul class="list-group list-group-flush">';
            foreach ($valueArray as $value) {
                echo '<li class="list-group-item">' . $value . '</li>';
            }
            echo '</ul>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>

</div>

<footer>
    <?php addFooter(); ?>
</footer>
</body>
<?php mysqli_close($con); ?>
</html>