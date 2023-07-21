<?php 
$dbhost = "148.66.138.145";
$dbuser = "dbusrShnkr23";
$dbpass = "studDBpwWeb2!";
$dbname = "dbShnkr23stud2";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
    die("DB connect faild: ". mysqli_connect_error() . "(" . mysqli_connect_errno() .")");
}
?>