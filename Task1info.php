<?php
    session_start();
    if(isset($_SESSION["task1Info"])){
        if($_SESSION["task1Info"]=="filled"){
          header("Location: Task1.php");      
          }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Task 1</title>
</head>
<body>
<h1> Task 1 </h1>
<h2>Imagine a hypothetical scenario where you are selected as one of the main leaders of a student organization that helps in spreading awareness on plastics and recycling. Academicians and policymakers in your community have recognized your efforts, and they have asked you to come up with a response by ranking the answers present on the Q&A.</h2>
<p></p>

<div class="wrap">
  <h3 class="likert-header">For each questions given below, please  select a response on a five-point scale ranging from strongly agree to strongly disagree.</h3>
  <form action="phpFiles/task1info.php" method="POST">
    <label class="statement">1a) I feel this task is difficult.</label>
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
    <label class="statement">1b) I feel this task is complex.</label>
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
    
    
    <label class="statement">1c) I am knowledgeable in this topic.</label>
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
        <input type="radio" name="1c" value="disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    
    
    <label class="statement">1d) I am interested in this topic.</label>
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
        <input type="radio" name="1d" value="disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">1e) I feel this task is important to me.</label>
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
        <input type="radio" name="1e" value="disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">1f) I feel motivated to work on this task.</label>
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
        <input type="radio" name="1f" value="disagree" required>
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="strong_disagree" required>
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
    
      <button class="clear">Clear</button>
      <button type="submit">Submit</button>
    </div>
  </form>
</div>
</body>
</html>