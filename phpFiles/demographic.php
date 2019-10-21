<?php
include('connection.php');
session_start();
//checking if the demographic page has been already filled, if yes then redirection to next page
if(isset($_SESSION["demographic"])){
    if($_SESSION["demographic"]=="filled"){
        header("Location: ../Task1info.php");
    }
}
//getting data from previous page
$username = $_SESSION["username"];
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$Undergraduate = $_POST['Undergraduate'];
$query = 'INSERT INTO `demographic`(username, name, gender, age, undergraduate) 
    VALUES("' . $username . '", "' . $name . '", "' . $gender . '", "' . $age . '", "' . $Undergraduate . '")';
if (mysqli_query($conn, $query)) {
    $_SESSION["demographic"]="filled";
    header("Location: ../Task1info.php");
} else {
    echo "<script>
    alert('Error!! Could not Execute!!');
    window.location.href='../Demographic.php';
    </script>";
}
