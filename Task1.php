<?php
session_start();
if (isset($_SESSION["task1"])) {
  if ($_SESSION["task1"] == "filled") {
    header("Location: PostTask1.php");
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Task 1</title>
</head>

<body>
  <p>Imagine a hypothetical scenario where you are selected as one of the main leaders of a student organization that helps in spreading awareness on plastics and recycling. Academicians and policymakers in your community have recognized your efforts, and they have asked you to come up with a response by ranking the answers present in the Q & A pair.
    <br>
    Also, presented are the four answers for the question, rank/sort the answer choices and then click submit when you are done.</p>
  <h1>Task 1</h1>
  <h2>Question 1: When did recycling become popular?<h2>
      <!doctype html>
      <html lang="en">

      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Sortable - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <style>
          #sortable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 70%;
          }

          #sortable li {
            margin: 0 3px 3px 3px;
            padding: 0.6em;
            padding-left: 1.5em;
            font-size: 0.5em;
            height: 65px;
          }

          #sortable li span {
            position: absolute;
            margin-left: -1.0em;
          }
        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
          $(function() {
            $("#sortable").sortable();
            $("#sortable").disableSelection();
          });
        </script>
      </head>

      <body>

        <ul id="sortable">
          <li id="first" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>1. In the 70's when energy costs were quickly rising. It only takes about %5 of the energy to recycle a aluminum can than to make a new one. NUMBER OF LIKES: 1</li>
          <li id="second" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>2. Some countries have recycle and reuse far more often and a much longer time. The throw-away culture of the fast food nation has created so much trash and waste. In the late 80's municipalities were making it a requirement, while one trash company in the area was putting up obstacles like requiring the removal of labels from glass which caused quite an uproar. NUMBER OF LIKES: 0</li>
          <li id="third" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>3. When they paid for cans and bottles. NUMBER OF LIKES: 1 </li>
          <li id="fourth" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>4. I think it's always been popular out of necessity to reuse and recycle. Especially during the depression. It's only recently we have become a 'disposable' society NUMBER OF LIKES: 1</li>
        </ul>

      </body>

      </html>

      <button onclick="add()">Submit Order</button>
      </form>
      <script type="text/javascript">
       var start;
        $(document).ready(function() {
          start = new Date();
        });
        function add() {
          var end = new Date();
          var time = end- start;
          var idsInOrder = new Array();
          idsInOrder = $("#sortable").sortable("toArray");
          idsInOrder.push(time);
          // console.log(idsInOrder[0]);
          // console.log(idsInOrder[1]);
          // console.log(idsInOrder[2]);
          // console.log(idsInOrder[3]);
          // console.log(idsInOrder[4]);
          //JSON.stringify(courseArray);
          var http = new XMLHttpRequest();
          var url = "phpFiles/task1.php";
          var params = "order=" + idsInOrder;
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
          window.location.href = "phpFiles/task1DB.php";
        }
      </script>
      <?php
      ?>

</body>

</html>