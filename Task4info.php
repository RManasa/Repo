<?php
    session_start();
    if(isset($_SESSION["task4Info"])){
        if($_SESSION["task3Info"]=="filled"){
          header("Location: Task4.php");      
          }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Task 4</title>
</head>
<body>
<h1> Task 4 </h1>
<h2></h2>
<p></p>

<div class="wrap">
  <h3 class="likert-header">Skin pigmentation has been found among several individuals. This can occur due to different reasons and some of the reasons have been on the content present online. Before performing the task, answer the following questions.</h3>
  <form action="phpFiles/task4info.php" method="post">
    <label class="statement">2a) I feel this task is difficult.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1a" value="strong_agree" required>
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="agree" required>
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="Neutral" required>
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1a" value="Disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    <label class="statement">2b) I feel this task is complex.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1b" value="strong_agree" required>
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="agree" required>
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="Neutral" required>
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1b" value="Disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    
    
    <label class="statement">2c) I am knowledgeable in this topic</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1c" value="strong_agree" required>
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="agree" required>
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="Neutral" required>
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1c" value="Disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    
    <label class="statement">2d) I am interested in this topic.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1d" value="strong_agree" required>
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="agree" required>
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="Neutral" required>
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1d" value="Disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">2e) I feel this task is important to me.</label>
      <ul class='likert'>
      <li>
        <input type="radio" name="1e" value="strong_agree" required>
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="agree" required>
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="Neutral" required>
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1e" value="Disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">2f) I feel motivated to work on this task.</label>
      <ul class='likert'>
      <li>
        <input type="radio" name="1f" value="strong_agree" required>
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="agree" required>
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="Neutral" required>
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1f" value="Disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
    
      <button class="clear">Clear</button>
      <button class="submit">Submit</button>
    </div>
  </form>
</div>
</body>
</html>
