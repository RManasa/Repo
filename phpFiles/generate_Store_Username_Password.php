<?php
    include("connection.php");
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 4; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    function randomUsername() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $user = array(); //remember to declare $pass as an array
        array_push($user,"user");
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 2; $i++) {
            $n = rand(0, $alphaLength);
            $user[] = $alphabet[$n];
        }
        return implode($user); //turn the array into a string
    }


    $username = randomUsername();
    $password = randomPassword();

    $query = 'INSERT INTO `users`(username, password) 
    VALUES("' . $username . '", "' . $password . '")';

    if (mysqli_query($conn, $query)) {
        echo "Username: ".$username;
        echo "<br>";
        echo "Password: ". $password;
        echo "<br>";
        echo "inserted into table";
    } else {
        echo "<script>
        alert('User alredy exist. Kindly refresh again:)');
        </script>";
    }
?>
