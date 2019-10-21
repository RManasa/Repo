<?php
    //this is AJAX request and response
    session_start();
    $course = ($_POST['order']);
    $_SESSION["ordersForTask2"]= $course;
    echo "1";
?>
