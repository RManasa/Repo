<?php
    include('connection.php');
    session_start();
    $order = $_SESSION["ordersForTask2"];
    $arr = explode(",", $order);
    $username =  $_SESSION["username"];
    $_SESSION["page2Time"] =($arr[1]/1000);
    $query = 'INSERT INTO `task2`(username, firstAnswer) 
        VALUES("' . $username . '", "' . $arr[0] . '")';
    if(mysqli_query($conn, $query)) {
        unset($arr);
        $_SESSION["task2"] = "filled";
        header("Location: ../PostTask2.php");
    } else {
        echo "<script>
        alert('Error!! Could not Execute!!');
        window.location.href='../Task2.php';
        </script>";
    }
?>
