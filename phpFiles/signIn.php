<?php 
    include('connection.php');
    session_start();
    //getting data from previous page
    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo  $username . "   ". $password;
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $rowcount1=mysqli_num_rows($result);
     //fetching data from query
      if($rowcount1>0){ 

        $result1 = mysqli_query($conn, "SELECT * FROM posttask4 WHERE username='$username'");  //posttask4 is the last form
        $rowcount=mysqli_num_rows($result1);

        if($rowcount==0){
          $_SESSION["username"] = $username;
          header("Location: ../Demographic.php");
        }
        else{
          echo "<script>
          alert('already Filled');
          window.location.href='../signIn.php';
          </script>";
        }  

      }
      else{
        echo "<script>
          alert('Wrong Username/password! :( ');
          window.location.href='../signIn.php';
          </script>";
      }
?>