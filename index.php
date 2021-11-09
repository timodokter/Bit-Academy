<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
<?php
    require_once "Header/header.php";
?>

<h1 id="PageName">Submit</h1><br>

<!--WARNINGBOX-->
<div class="alert" style="line-height: 20px">
    <span class="closebtn" onclick="this.parentElement.style.height='0'; this.parentElement.style.padding='0';">&#10006;</span>
    <label style="background-color: transparent; font-size: 30px" for=".alert">Description <br> <br></label>Choose A category and subject to add it to the planning
    </div>


<!--THIS WEEK PLANNING-->
<form class="thisWeekPlanning">
    <label class="PlanningHeader">This week planning</label><br>

    <ul id="listOfTasks">
        <li class="listItem">
            <span class="material-icons" id="deleteButton" onclick="deleteTask()">delete_outline</span>
            item1 - chapter 1 <br>Start Time: 09:30 <br>
            <button  id="Pause1" onclick="return hidePauseButton()">Pause</button>
            <button id="Resume1" onclick="return showPauseButton()">Resume</button>
            <button id="Stop1" onclick="stopTasks()">Stop</button>
        </li>
    </ul>
</form>
<!--ADD SUBJECT-->
<form action="index.php" id="addToPlanning" method="post">
    <label for="subject" class="label">Subject</label>
    <select id="subject" name="subject">
        <option value="test1">test 1</option>
        <option value="test2">test 2</option>
        <option value="test3">test 3</option>
    </select>
    <label for="chapter" class="label">Chapter</label>
    <select id="chapter" name="chapter">
        <option value="test1">test 1</option>
        <option value="test2">test 2</option>
        <option value="test3">test 3</option>
    </select>
    <button id="planButton" type="submit" onclick="return false">Plan</button>
</form>
<br>
<br>



<script>
    <!-- to hide pause button -->
    let pause = document.getElementById("Pause1");
    let resume = document.getElementById("Resume1");

    function showPauseButton() {
        pause.style.display = "inline";
        resume.style.display = "none";
        return false;
    }

    function hidePauseButton() {
        resume.style.display = "inline";
        pause.style.display = "none";
        return false;
    }
    function stopTasks() {
        <!--Stop tasks-->
        if (confirm('Are you sure? This will remove the task and move it to the history.')) {
            // Save it!
            console.log("They're sure");
        } else {
            // Do nothing!
            console.log("They're not sure");
        }
        return false;
    }
    function deleteTask() {
        <!--Stop tasks-->
        if (confirm('Are you sure? This will remove the task forever.')) {
            // Save it!
            console.log("They're sure");
        } else {
            // Do nothing!
            console.log("They're not sure");
        }
        return false;
    }


</script>


</body>
</html>