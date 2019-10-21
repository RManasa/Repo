<?php
    session_start();
    if(isset($_SESSION["postTask1"])){
        if($_SESSION["postTask1"]=="filled"){
          header("Location: Task2info.php");      
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
  <h1 class="likert-header">For each question provided below, please select your response on a five-point scale ranging from strongly disagree to strongly agree.</h1>
  <form action="phpFiles/postTask1.php" method="POST">
    <label class="statement">3a) I felt more attentive while completing the task while using the system.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1a" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="Agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1a" value="disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    <label class="statement">3b) I felt the icons and visualizations were usable and did not confuse me at all.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1b" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="Agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1b" value="disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    
    
    <label class="statement">3c) I felt the features present in the system were pleasing and made me comfortable while performing the task.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1c" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="Agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1c" value="disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    
    
    <label class="statement">3d)I felt the system wants me to use it more often. </label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1d" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="Agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1d" value="disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">3e) I felt the experience of using this system was new and brought forward several suprising, unexpected, or new information at various stages while completing the task.</label>
      <ul class='likert'>
      <li>
        <input type="radio" name="1e" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="Agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1e" value="disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">3f) I felt involved as the system satisfied my needs while completing the task. </label>
      <ul class='likert'>
      <li>
        <input type="radio" name="1f" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="Agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1f" value="disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="strong_disagree">
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