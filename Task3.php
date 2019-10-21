<?php
session_start();
if (isset($_SESSION["task3"])) {
  if ($_SESSION["task3"] == "filled") {
    header("Location: PostTask3.php");
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Task 3</title>
</head>

<body>
  Consider a scenario, where you supposed to come up with uncommon English words as a history school teacher. While looking for such words, you stumble upon a Q&A website carrying information for a similar word. As it is a Q&A site, rankthe answers based on their quality in amanner you can present it to your students.
  <h1>Task 3</h1>
  <h2>Question 3: What does the name "Orangutan" mean?<h2>
      <!doctype html>
      <html lang="en">

      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Sortable - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
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
          <li id="first" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>1) Orangutan is Malaysian for "man of the forest". NUMBER OF LIKES: 0</li>
          <li  id="second"  class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>&#039; 2) Orangutan' is originated from the Malay (Malaysian) language which means "man of the forest". 'Orang' means 'people or person' while 'Utan' (accurately 'Hutan') means 'jungle or forest'. NUMBER OF LIKES: 0</li>
          <li id="third" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>3) AKA "Wild Man of the Woods," which was a familiar figure, almost amounting to an archetype, in old and Mediaeval European lore and literature. NUMBER OF LIKES: 0 </li>
          <li id="fourth" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>4) A real big monkey!! NUMBER OF LIKES: 1</li>
        </ul>

      </body>

      </html>

      <button onclick="add()">Submit Order</button>
      <script  type="text/javascript">
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
          //JSON.stringify(courseArray);
          var http = new XMLHttpRequest();
            var url = "phpFiles/task3.php";
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
            window.location.href = "phpFiles/task3DB.php";
        }
      </script>
      <?php 
      // $temp = $_SESSION["ordersForTask3"];
      //   echo  $temp;
      ?> 
</body>

</html>