<?php
$uname = $_POST["uname"];
$upassword = $_POST["psw"];
$user_name = $uname;
$user_password = $upassword;


$servername = "localhost";
$username = "root";
$password = "Aqib@22298";
$dbname = "hms";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

// $sql = "create database hms";
// if(mysqli_query($conn,$sql)){
//     echo "Database Created SuccessFully";
// } else {
//     echo "Error in creating database : ". mysqli_error($conn);
// }
// mysqli_close($conn)

// $sql = "create table hms_users(name varchar(50) , password varchar(50))";
// if(mysqli_query($conn,$sql)){
//     echo "table Created SuccessFully";
// } else {
//     echo "Error in creating table : ". mysqli_error($conn);
// }
// mysqli_close($conn);


$sql = "select name from hms_users where password='$user_password'";
$pass = mysqli_query($conn,$sql);
if($pass){
    if(mysqli_num_rows($pass)>0){
        echo "<body style=\"margin:0;
        padding:0;background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(backImg.jpg);height: 100%;background-size: cover;background-position: center;\">";
        echo "<div style=\"color:lightgreen;font-size:46px;margin:0;padding:20px;top:-40px;position :absolute;\"><h1> welcome To HMS </h1></div>";
        echo "<button style=\"border: 1px solid white;position:absolute;top:45%;right:40%;padding:20px 40px;color:lightgreen; \"><a style=\"text-decoration: none;font-size: 40px;color:green;\" href=\"homepage.html\">Visit homepage</a></button>";
        echo "</body>";
    } else {
        echo "Password is in correct : Please Retry ___...";
        echo "<button style=\"border: 1px solid white;position:absolute;top:45%;right:40%;padding:20px 40px;color:lightgreen; \"><a style=\"text-decoration: none;font-size: 40px;color:green;\" href=\"login.html\">Retry</a></button>";

    }
} else {
    echo "Error Occured: Retry". mysqli_error($conn);
}

mysqli_close($conn);
?>