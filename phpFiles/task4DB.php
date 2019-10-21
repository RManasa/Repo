<?php
    include('connection.php');
    session_start();
    $order = $_SESSION["ordersForTask4"];
    $arr = explode(",", $order);
    $username =  $_SESSION["username"];
    $_SESSION["page4Time"] =$arr[1]/1000;
    $query = 'INSERT INTO `task4`(username, firstAnswer) 
        VALUES("' . $username . '", "' . $arr[0] . '")';
    if (mysqli_query($conn, $query)) {
        unset($arr);
        $_SESSION["task4"]="filled";
        header("Location: ../PostTask4.php");
    } else {
        echo "<script>
        alert('Error!! Could not Execute!!');
        window.location.href='../Task4.php';
        </script>";
    }

?>
