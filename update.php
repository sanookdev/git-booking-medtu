<?php
include "config/connect.php";
include "function.php";

if (!empty($_POST)) {
    $data = array();
    for ($i = 0; $i < count($_POST['key']); $i++) {
        $data[$_POST['key'][$i]] = $_POST['data'][$i];
    }
    if (update($_POST['table'], $data,  $_POST['where'], $conn) == true) {
        echo "1";
    } else {
        echo "0";
    }
}