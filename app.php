<?php
session_start();
include "db.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app chatapp</title>
</head>

<body>
    <?php
    if (isset($_SESSION['disp']) && $_SESSION['disp'] == 1) {
        echo "<div class='wrapper '>";
        echo "connexion réussis!" . $_SESSION['email'];
        echo "</div>";
    } else {
        echo "";
    }
    ?>
    <div>
        <h1>Lasts conversations</h1>
        <?php
        $showconv = "SELECT user_id, fname, lname FROM `users` ";
        $records = $db->query($showconv);

        while ($row = $records->fetch()) {
            if ($row == null) {
                echo "pas d'anciens messages<br>";
            } else {
                $username = $row['fname'] . " " . $row['lname'];
                //echo $row[0] . " " . $row[1] . " " . $row[2] . "<br>";
                echo "<a href='chat.php?userid=" . $row['user_id'] . "&&username=" . $username . "'class='users'>
                    <img src=''><span>" . $row['fname'] . " " . $row['lname'] . "</span><br><br>
                </a>";
            }
        }
        ?>
    </div>
</body>

</html>