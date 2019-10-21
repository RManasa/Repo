<?php
    session_start();
    if(isset($_SESSION["task2Info"])){
        if($_SESSION["task2Info"]=="filled"){
          header("Location: Task2.php");      
          }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Task 2</title>
</head>
<body>
<h1> Task 2 </h1>
<h2>As paleontologist Kenneth Lacovara mentions in his book “Dinosaurs are long-lasting champi-ons of resilience and persistence.  They reigned unchallenged on the land for the better part of 165 million years.” However, there are questionable facts about their extinction. Take help from the Q&A content present on this site, andconstructan answer which would best fit the argu-ment about why dinosaurs became extinct</h2>
<p></p>

<div class="wrap">
  <h3 class="likert-header">Below are the questions that will be asked in the pre-task questionnaire.  For each question, participants will select their response on a five-point scale ranging from strongly disagree to strongly agree.</h3>
  <form action="phpFiles/task2info.php" method="post">
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