<?php
function hum_patient($name)
{
    echo ' <div class="navigation">
  <div class="userBx">
    <div >
      <span>' . $name . '
    </div>
   
  </div>
  <div class="menuToggle" " ></div>
  <ul class="menu">
    <li>
      <a href="#">Home</a>
    </li>
    <li>
      <a href="treatmentList.php">TreatmentList</a
      >
    </li>
    <li>
      <a href="logout.php">Logout</a
      >
    </li>
    <li>
      <a href="#">Settings</a>
    </li>
    <li>
      <a href="#">Help</a
      >
    </li>
    
  </ul>
</div>';
}

function addFooter()
{
    echo '
      <ul class="setting">
              <li><a href="#"><i class="fa-solid fa-gear"></i></a></li>
              <li><a href="#"><i class="fa-solid fa-circle-question"></i></a></li>
      ';
}

function addLinks()
{
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/bfd6d1b072.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/globalScript.js"></script>
        <link rel="stylesheet" href="css/globalStyle.css">
        <link rel="stylesheet" href="css/hum.css">';
}

?>
