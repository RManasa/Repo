<?php
include('connection.php');
session_start();
// echo "Page 1 time: ". $_SESSION["page1Time"]."  \n";
// echo "Page 2 time: ". $_SESSION["page2Time"]."  \n";
// echo "Page 3 time: ". $_SESSION["page3Time"]."  \n";
// echo "Page 4 time: ". $_SESSION["page4Time"]."  \n";
//inserting time in database
$time1 = $_SESSION["page1Time"];
$time2 = $_SESSION["page2Time"];
$time3 = $_SESSION["page3Time"];
$time4 = $_SESSION["page4Time"];
$username = $_SESSION["username"];
$query = 'INSERT INTO `timespent`(username, task1, task2, task3, task4) 
    VALUES("' . $username . '", "' . $time1 . '", "' . $time2 . '", "' . $time3 . '", "' . $time4 . '")';
if (mysqli_query($conn, $query)) {
    session_destroy();
    header("Location: ../End.html");
} else {
    echo "<script>
    alert('Error!! Could not Execute!!');
    window.location.href='../PostTask4.php';
    </script>";
}
