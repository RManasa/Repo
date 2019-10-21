<?php
    session_start();
    if(isset($_SESSION["task4"])){
        if($_SESSION["task4"]=="filled"){
          header("Location: PostTask4.php");      
          }
    }
?>
<!DOCTYPE html>
<html>
<title>Task 4</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<h1> Task 4 </h1>
<p>Skin pigmentation has been found among several individuals.  This can occur due to differentreasons and some of the reasons have been described in the Q& A post.  Construct a response based on the content present online.</p>

<p><b>Question 1:What are the different causes of pigmentation of the skin? </b></p>
<p>Answer 1: Multiple factors cause skin pigmentation. The prime factor is sun exposure. It can also be caused due to hormonal imbalance due to pregnancy, oral contraceptives or hormone replacement therapy. Post-inflammatory hyperpigmentation or heredity can also be responsible for the skin pigmentation.
(https://www.kayaskinclinic.com/uae/en/treatments/pigmentation/)
<p>Answer 2: Skin pigmentation is often caused due to the hormonal changes and that develop during pregnancy. It can also be caused by too much sun exposure called as sunspots generally appears on face and hands.
<p>Answer 3: It can be a sign of premature aging. So, to slow down the process of aging, try some Super Effective Anti Aging Home Remedies. Read zovon to find solution.
<p>Answer 4: When hormonal changes occur in the body, the skin gets damaged or affected by these hormones. As a result, the body leads to production of too much melanin and disperses it. Because of this dark or patchy colored spot forms called pigmentation. Pigmentation can be also caused by sun damage, inflammation, or some other skin injuries.

<br>
<br>
<textarea id="text" rows="4" cols="50" name="answer">

</textarea>
<br>
<input id="btn" type="submit">
</form>
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
        var url = "phpFiles/task4.php";
        var params = "order1=" + arrOfAnswerAndTime;
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
        window.location.href = "phpFiles/task4DB.php";
        });
    </script>

</html>