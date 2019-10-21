<?php
  session_start();
 
  $time= $_POST['timeSpent'];
  $_SESSION("time") = $time;
  echo $time;
?>