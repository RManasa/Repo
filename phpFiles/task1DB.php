<?php
    include('connection.php');
    session_start();
    $order = $_SESSION["ordersForTask1"];
    $arr = explode(",", $order);
    $username =  $_SESSION["username"];
    $query = 'INSERT INTO `task1`(username, firstAnswer, secondAnswer, thirdAnswer, fourthAnswer) 
        VALUES("' . $username . '", "' . $arr[0] . '", "' . $arr[1] . '", "' . $arr[2] . '", "' . $arr[3] . '")';
    $_SESSION["page1Time"] =$arr[4]/1000;
    if (mysqli_query($conn, $query)) {
        $_SESSION["task1"] = "filled";
        header("Location: ../PostTask1.php");
    } else {
        echo "<script>
        alert('Error!! Could not Execute!!');
        window.location.href='../Task1info.php';
        </script>";
    }

?>
