<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directions";

$conn= new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['Front'])){ 
    echo "Front";
    $sql = "INSERT INTO `value`(`value`) VALUES('Front')";
    mysqli_query($conn, $sql);
}
else if(isset($_GET['Back'])){
    echo "Back";
    $sql = "INSERT INTO `value`(`value`) VALUES('Back')";
    mysqli_query($conn, $sql);
}
else if(isset($_GET['Left'])){
    echo "Left";
    $sql = "INSERT INTO `value`(`value`) VALUES('Left')";
    mysqli_query($conn, $sql);
}
else if(isset($_GET['Right'])){
    echo "Right";
    $sql = "INSERT INTO `value`(`value`) VALUES('Right')";
    mysqli_query($conn, $sql);
}
else if(isset($_GET['Stop'])){
    echo "Stop";
    $sql = "INSERT INTO `value`(`value`) VALUES('Stop')";
    mysqli_query($conn, $sql);
}

?>