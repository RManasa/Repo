<?php
    session_start();
    $course = ($_POST['order']);
    $_SESSION["ordersForTask3"]= $course;
    echo "1";
?>