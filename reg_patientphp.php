<?php
$pName = $_POST["Patientname"];
$pNo = $_POST["patientNo"];
$pAge = $_POST["age"];
$pDis = $_POST["disease"];

$servername = "localhost";
$username = "root";
$password = "Aqib@22298";
$dbname = "hms";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

//$sql = "create database hms";
//if(mysqli_query($conn,$sql)){
//     echo "Database Created SuccessFully";
// } else {
//     echo "Error in creating database : ". mysqli_error($conn);
// }
// mysqli_close($conn)

// $sql = "create table patients(pname varchar(50) , pno int,page int,pdis varchar(50))";
// if(mysqli_query($conn,$sql)){
//     echo "table Created SuccessFully";
// } else {
//     echo "Error in creating table : ". mysqli_error($conn);
// }
// mysqli_close($conn);

$sql = "INSERT INTO patients values ('$pName',$pNo,$pAge,'$pDis')";
if(mysqli_query($conn,$sql)){
    echo "<body style=\"margin:0;
    padding:0;background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(backImg.jpg);height: 100%;background-size: cover;background-position: center;\">";
    echo "<div style=\"color:lightgreen;left:25%;font-size:30px;margin:0;padding:20px;top:-40px;position :absolute;\"><h1> Thankyou for Registration </h1></div>";
    echo "<button style=\"border: 1px solid white;position:absolute;top:45%;right:40%;padding:20px 40px;color:lightgreen; \"><a style=\"text-decoration: none;font-size: 40px;color:green;\" href=\"homepage.html\">Visit homepage</a></button>";
    echo "</body>";
} else {
    echo "Error in creating table : Retry :". mysqli_error($conn);
}
mysqli_close($conn);

?>