<?php
session_start();
include_once "db.php";
$newMessage = $_GET['newmessage'];
$msgfrom = $_SESSION["firstuserid"];
$msgto = $_SESSION["otheruserid"];
$date = date('y-m-d h:i:s');

$sendmsgquery = "INSERT INTO messages (id_msg_from, id_msg_to, msg, date) VALUES($msgfrom,$msgto,'$newMessage', '$date')";
$records = $db->query($sendmsgquery);
echo $sendmsgquery . " " . $date;
header("location: chat.php?userid=" . $msgto . "&&username=" . $_SESSION["otherusername"] . "");
