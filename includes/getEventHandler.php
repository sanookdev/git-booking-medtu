<?php
require 'databaseHandler.php';

header("Content-Type: application/json"); // Since we are sending a JSON response here (not an HTML document), set the MIME Type to application/json
session_start();
// php://input recieves raw post data
$json_str = file_get_contents('php://input');
//This will store the data into an associative array
$json_obj = json_decode($json_str, true);
$room_id = $json_obj['room_id'];
$sql = "SELECT b.building_name , c.class_no ,room.`name`,res.* FROM building AS b
            JOIN class AS c ON b.id = c.`building_id`
                JOIN rooms AS room ON (room.`building_id` = b.`id` AND room.`class_no` = c.`class_no`)
                    JOIN reservation AS res ON room.`id` = res.`room_id`
                        WHERE room.id = '$room_id' AND res.status = '1'";
                        
$result = mysqli_query($mysqliConn,$sql);
if($result){
    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode(array(
        "success" => true,
        "events" => $events
    ));
    exit;
}
else{
    echo json_encode(array(
        "success" => false,
        "message" => 'SQL Error'
    ));
    exit;
}


?>