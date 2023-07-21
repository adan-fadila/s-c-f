<?php 
include 'db/db.php';
include 'global.php';
session_start();
$id = $_SESSION["id"];
$name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php addLinks()?>
        <link rel="stylesheet" href="css/treatmentList.css">
</head>
    <body>
        <header>
            <a href="#" id="logo"> </a>

            <div class="web-nav">
                <ul class="web-nav-list">
                    <li class="web-nav-list-item"><a href="./index.php">Home</a></li>
                    <li class="web-nav-list-item active"><a href="#">Treatments List</a></li>
                    <li class="web-nav-list-item"><a href="./request_treatment.php">New Treatment Request</a></li>
                </ul>
            </div>
            <div class="header-right"></div>
            <?php hum_patient($name);?>
        </header>
        <main>
        <form id = "search" method="post" action="#">
        <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" >
        <input type="submit" class="btn btn-outline-primary">
        </div>
</div>
        </form>
        
            <table class="table table-striped">
            
                <thead  class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">diagnosis</th>
                    <th scope="col">start date</th>
                    <th scope="col">end date</th>
                    <th scope="col">more</th>
                    </tr>
                </thead>
                <tbody class=".table-hover">
                <?php  
                            
                            $query = "select * from tbl_225_treatments; ";
                            $result = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($result)){
                                $more = ' <a href="./mainObject.php?treatmentId='.$row["id"].'.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                                </a>';
    
                                echo'<tr>
                                <td>'.$row["id"].'</td>
                                <td >'.$row["diagnosis"].'</td>
                                <td >'.$row["start_date"].'</td>
                                <td >'.$row["due_date"].'</td>
                                <td >'.$more.'</td>
                                </tr>';
                            }
                            mysqli_free_result($result);
                ?>
                </tbody>
                </table>
        </main>
    </body>
</html>
<?php mysqli_close($con)?>