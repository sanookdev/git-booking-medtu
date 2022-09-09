<?php
header("Content-type: application/json; charset=utf-8");

include "config/connect.php";
include "function.php";
if (!empty($_POST)) {
    // print_r($_POST);
    if (isset($_POST['topic']) && $_POST['topic'] == 'reservation') {
        $_POST['table'] = 'reservation(`room_id`,`member_id`,`topic`,`comment`, `begin`,`end`,`for`,`mobile`)';
    }
    if (insert($_POST['table'], $_POST['data'], $conn) == true) {
        echo "1";
    } else {
        echo "0";
    }
}