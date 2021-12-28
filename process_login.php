<?php
session_start();
include "db.php";
$email = $_POST['email'];
$_SESSION['email'] = $email;
$password = $_POST['pswd'];
$query = "select * from users where email = '$email' && password = '$password' ";
echo $query . '<br>';
$records = $db->query($query);
while ($row = $records->fetch()) {
    if ($row['email'] == null && $row['password'] == null) {
        echo "<br>" . $row['email'] . " " . $row['password'];
        $_SESSION["disp"] = false;
        $_SESSION['connfailed'] = true;
        echo $_SESSION["disp"];
        header('Location: login.php');
    } else {
        echo "<br>" . $row['email'] . " " . $row['password'];
        $_SESSION['firstuserid'] = $row['user_id'];
        $_SESSION["disp"] = true;
        $_SESSION['connfailed'] = false;
        echo $_SESSION["disp"];
        header('Location: app.php');
    }
}
