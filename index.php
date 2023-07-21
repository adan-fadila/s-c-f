
<?php 
include "db/db.php";
if(!empty($_POST["loginMail"])){
    $query = "select * from tbl_225_users as p where p.email ='".$_POST["loginMail"]."' and p.password='".$_POST["loginPass"]."'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        session_start();
        $_SESSION["user-type"] = $row["user_type"];
        $_SESSION["id"] = $row["pid"];
        $_SESSION["name"] = $row["fullName"];
        if($row["user_type"] == "doctor"){
            header('Location: '. 'add_treatment.php');
        }
        if($row["user_type"] == "patient"){
            header('Location: '. 'request_treatment.php');
        }
        
        
    }else{
        echo "faild";
    }
}
?>
<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/bfd6d1b072.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script></head>
    <body>
        <div class="container">
            <h1>Login</h1>
            <form action="#" method ="post" id="frm">
                <div class="form-group">
                    <label for="loginMail">Email: </label>
                    <input type="email" class="form-control" id = "loginMail"name="loginMail" aria-describedby="emailHelp" placeholder="Email"> 

                </div>
                <div class="form-group">
                    <label for="loginPass">Password: </label>
                    <input type="password" class="form-control" id = "loginPass" name="loginPass" placeholder="Password"> 
                    
                </div>
                <button type="submit" class="btn btn-primary">Log me in</button>
                <div class="error-message"><?php if(isset($message)){echo $message;}?></div>
            </form>
        </div>
    </body>
</html>