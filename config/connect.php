<?
require_once "userpassDb.php";
$conn = new mysqli($hostDb,$userDb,$passDb,$nameDb);
if($conn->connect_error) { alert("can't connect db"); } 
?>