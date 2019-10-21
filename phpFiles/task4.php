<?php
    session_start();
    $course = ($_POST['order1']);
    $_SESSION["ordersForTask4"]= $course;
    echo "1";
?>
