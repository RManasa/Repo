<?php
    session_start();
    if(isset($_SESSION["posttask4"])){
        if($_SESSION["posttask4"]=="filled"){
          header("Location: End.html");      
          }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Task 2</title>
</head>
<body>
<div class="wrap">
  <h1 class="likert-header">For each question provided below, please select your response on a five-point scale ranging from strongly disagree to strongly agree.</h1>
  <form action="phpFiles/postTask4.php" method="post">
    <label class="statement">3a) I felt more attentive while completing the task while using the system.</label>
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
    <label class="statement">3b) I felt the icons and visualizations were usable and did not confuse me at all.</label>
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
    
    
    <label class="statement">3c) I felt the features present in the system were pleasing and made me comfortable while performing the task.</label>
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
    
    
    <label class="statement">3d)I felt the system wants me to use it more often. </label>
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
    
      <label class="statement">3e) I felt the experience of using this system was new and brought forward several suprising, unexpected, or new information at various stages while completing the task.</label>
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
    
      <label class="statement">3f) I felt involved as the system satisfied my needs while completing the task. </label>
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