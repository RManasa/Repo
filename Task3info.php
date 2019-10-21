<?php
    session_start();
    if(isset($_SESSION["task3Info"])){
        if($_SESSION["task3Info"]=="filled"){
          header("Location: Task3.php");      
          }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Task 3</title>
</head>
<body>
<h1> Task 3 </h1>
<h2>Consider a scenario, where you supposed to come up with uncommon English words as a history school teacher.  While looking for such words, you stumble upon a Q&A website carrying information for a similar word. As it is a Q&A site, rankthe answers based on their quality in amanner you can present it to your students.</h2>
<p></p>

<div class="wrap">
  <h3 class="likert-header">Below are the questions that will be asked in the pre-task questionnaire.  For each question, participants will select their response on a five-point scale ranging from strongly disagree to strongly agree.</h3>
  <form action="phpFiles/task3info.php" method="post">
    <label class="statement">2a) I feel this task is difficult.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1a" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1a" value="Disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    <label class="statement">2b) I feel this task is complex.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1b" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1b" value="Disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1b" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    
    
    <label class="statement">2c) I am knowledgeable in this topic</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1c" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1c" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1c" value="Disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1a" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    
    
    <label class="statement">2d) I am interested in this topic.</label>
    <ul class='likert'>
      <li>
        <input type="radio" name="1d" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1d" value="Disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1d" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">2e) I feel this task is important to me.</label>
      <ul class='likert'>
      <li>
        <input type="radio" name="1e" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1e" value="Disagree">
        <label>Disagree</label>
      </li>
      <li>
        <input type="radio" name="1e" value="strong_disagree">
        <label>Strongly disagree</label>
      </li>
    </ul>
    <div class="buttons">
    
      <label class="statement">2f) I feel motivated to work on this task.</label>
      <ul class='likert'>
      <li>
        <input type="radio" name="1f" value="strong_agree">
        <label>Strongly agree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="agree">
        <label>Agree</label>
      </li>
      <li>
        <input type="radio" name="1f" value="Neutral">
        <label>Neutral</label>
      </li>
      <li>
        <input type="radio" name="1f" value="Disagree">
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
