<?php 
session_start();
$_SESSION['user_id'] = 'administrator';
//https://medium.com/@nitinpatel_20236/challenge-of-building-a-calendar-with-pure-javascript-a86f1303267d
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <title>Calendar</title>
</head>

<body>

    <h1 id="monthAndYear"></h1>
    <button id="prevBtn"><i class="fas fa-arrow-left"></i></button>
    <div id="createEventBtn" hidden></div>
    <button id="nextBtn"><i class="fas fa-arrow-right"></i></button>
    <br>
    <br>
    <!-- Table for the initial calendar, in javascript a new table is create when a new month is loaded -->
    <table id="calendarTable">

    </table>
    <div id="createEvent" hidden>
        <button id="closeCreateBtn">&#10006</button>
        <h3>Create New Event</h3>
        <label for="eventTitle">Title: </label>
        <input type="text" class="createEl" name="eventTitle" id="eventTitle" placeholder="Title..."><br>
        <label for="eventDate">Date: </label>
        <input type="date" class="createEl" name="eventDate" id="eventDate"><br>
        <label for="eventTime">Time: </label>
        <input type="time" class="createEl" name="eventTime" id="eventTime"><br>
        <label for="eventTime">Time: </label>
        <!-- <input type="text" class="createEl" name="test" id="test"><br> -->
        <button id="createBtn">Create</button>
    </div>

    <div id='eventPopUp' hidden>
        <button id="closeEventBtn">&#10006</button>
        <div id="eventTextArea">
        </div>
    </div>
</body>
<script src="main.js"></script>

</html>

<script type='text/javascript'>
building_id = '1';
class_no = '2';
getEventsAjax(building_id, class_no);
</script>