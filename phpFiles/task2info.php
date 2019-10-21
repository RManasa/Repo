<?php
//this page is to get the Task1Info data and store them in database
include('connection.php');
session_start();
//getting data from previous page
$username = $_SESSION["username"];
$oneA = $_POST['1a'];
$oneB = $_POST['1b'];
$oneC = $_POST['1c'];
$oneD = $_POST['1d'];
$oneE = $_POST['1e'];
$oneF = $_POST['1f'];

//echo $username .   " " . $oneA ." " . $oneA ." " . $oneC ." " . $oneD ." " . $oneE ." " . $oneF ." " ;
$query = 'INSERT INTO `task2info`(username, 1a, 1b, 1c, 1d,1e,1f) 
    VALUES("' . $username . '", "' . $oneA . '", "' . $oneB . '", "' . $oneC . '", "' . $oneD . '","'.$oneE.'","'.$oneF.'")';
if (mysqli_query($conn, $query)) {
    $_SESSION["task2Info"]="filled";
    header("Location: ../Task2.php");
} else {
    echo "<script>
    alert('Error!! Could not Execute!!');
    window.location.href='../Task2info.php';
    </script>";
}
?>
