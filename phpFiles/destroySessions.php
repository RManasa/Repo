<?php 
    //This file should only be used in app development
    session_start();
    session_destroy();
    echo "Sessions Destroyed!"
?>