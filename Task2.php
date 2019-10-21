<?php
    session_start();
    if(isset($_SESSION["task2"])){
        if($_SESSION["task2"]=="filled"){
          header("Location: PostTask2.php");      
          }
    }
?>
<!DOCTYPE html>
<html>
<title>Task 2</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <!-- <form action="phpFiles/task2.php" method="post"> -->
<h1> Task 2 </h1>
<p>Imagine a hypothetical scenario where you are selected as one of the main leaders of a student organization that helps in spreading awareness on plastics and recycling. Academicians and policymakers in your community have recognized your efforts, and they have asked you to come up with a response by ranking the answers present on the Q&A provided below.</p>

<p><b>Question 1: Why did dinosaurs become extinct? A consensus of scientific opinion says it was because of a metorite impact 65 million years ago. Seems to me SOME would have survived. </b></p>
<p>Answer 1: Some did. 65 million years is a long time to evolve into the lizards and birds we see today.
<p>Answer 2 : Because behimoths (dinosaure as a word was coined in 1849) are mentioned in the Bible it could also be they died in the Noahanic Flood.
<p>Answer 3: Surely they did? There are lots of animals around today which are descendents from dinosaurs.. birds, lizards etc.
<p>Answer 4: The tuatara is considered to be from the oldest living line of dinosaurs.

<br>
<br>
<textarea id="text" rows="4" cols="50" name="answer">

</textarea>
<br>
<input id="btn" type="submit">
<script>
    var start;
        $(document).ready(function() {
          start = new Date();
        });
    $("#btn").click(function(){
        var answer = ($("#text").val());
        var end = new Date();
        var time = end- start;
        var arrOfAnswerAndTime = new Array();
        arrOfAnswerAndTime.push(answer);
        arrOfAnswerAndTime.push(time);
        var http = new XMLHttpRequest();
        var url = "phpFiles/task2.php";
        var params = "order=" + arrOfAnswerAndTime;
        http.open("POST", url, true);
        //Send the proper header information along with the request
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.onreadystatechange = function() { //Call a function when the state changes.
            if (http.readyState == 4 && http.status == 200) {
              if (http.responseText == 1) {
                // alert("Order Submitted");
              } else {
                // alert("Error Ocurred!");
              }
            } else {

            }
        }
        http.send(params);
        window.location.href = "phpFiles/task2DB.php";
        });
    </script>
</html>