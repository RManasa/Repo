<?php
    session_start();
    $course = ($_POST['order']);
    $_SESSION["ordersForTask1"]= $course;
    echo "1";
?>