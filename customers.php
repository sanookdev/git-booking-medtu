<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#btn1").hide();
        $("#btn").click(function() {
            $(this).hide();
            $("#btn1").show();
            $("#waitttAmazingLover").css("display", "block");
        });
        $("#btn1").click(function() {
            $(this).hide();
            $("#btn").show();
            $("#waitttAmazingLover").css("display", "none");
        });
    });
    </script>
</head>

<body>
    <div id="waitttAmazingLover"
        style="color: deepskyblue;display: none;position:absolute;top:24%;left:13%;padding:2px;text-align: center;width: 242px;">
        <img src="https://www.w3schools.com/jquery/demo_wait.gif" width="64" height="64"><br>Waiting..
    </div>
    <div class="">
        <div>
            <button id="btn" type="button" name="submit">Show Processing</button>
            <button style="" id="btn1" type="button" name="submit">Hide Processing</button>
        </div>

    </div>
</body>

</html>