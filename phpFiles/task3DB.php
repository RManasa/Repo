<?php
    include('connection.php');
    session_start();
    $order = $_SESSION["ordersForTask3"];
    $arr = explode(",", $order);
    $username =  $_SESSION["username"];
    $query = 'INSERT INTO `task3`(username, firstAnswer, secondAnswer, thirdAnswer, fourthAnswer) 
        VALUES("' . $username . '", "' . $arr[0] . '", "' . $arr[1] . '", "' . $arr[2] . '", "' . $arr[3] . '")';
    $_SESSION["page3Time"] =$arr[4]/1000;
    echo $_SESSION["page3Time"];
    if (mysqli_query($conn, $query)) {
        $_SESSION["task3"] = "filled";
        header("Location: ../PostTask3.php");
    } else {
        echo "<script>
        alert('Error!! Could not Execute!!');
        window.location.href='../Task3info.php';
        </script>";
    }

?>
