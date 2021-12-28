<?php
session_start();
include_once "db.php";

$otheruserid = $_GET['userid'];
$_SESSION["otheruserid"] = $otheruserid;
$firstuserid = $_SESSION["firstuserid"];

$otherusername = $_GET['username'];
$_SESSION["otherusername"] = $otherusername;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat with <?php echo $otherusername ?></title>
</head>

<body>
    <div class="wrapper">
        <div id="chatbox">
            <h2><?php echo $otherusername ?></h2>
            <div id="chatview">
                <?php
                $queryshowconv = "select * from users, messages where users.user_id = id_msg_from";

                $records = $db->query($queryshowconv);

                while ($row = $records->fetch()) {
                    if ($row == null) {
                        echo "pas d'anciens messages<br>";
                    } elseif ($row['id_msg_from'] == $otheruserid) {
                        echo "<div class='otherusermsg'>
                                <span>" . $row['msg'] . "</span>
                            </div><br><br>";
                    } else {
                        echo "<div class='firstusermsg'>
                                <span>" . $row['msg'] . "</span>
                            </div><br><br>";
                    }
                }
                ?>
            </div>
            <div id="chattextzone">
                <form action="processmsg.php" method="get">
                    <input type="text" name="newmessage" id="newmessage">
                    <input type="submit" value="envoyer">
                </form>
            </div>
        </div>
    </div>
    <style>
        .wrapper {
            margin: auto;
            width: 40%;
        }

        #chatbox {
            border: 1px solid grey;
            padding: 10px 0px;
            text-align: center;
            border-radius: 5px;
        }

        #chatview {
            border: 1px solid black;
            overscroll-behavior-y: initial;
        }

        #chattextzone {
            padding: 10px 0px;
        }

        .otherusermsg,
        .firstusermsg {
            padding: 5px;
            margin: 5px;
            width: fit-content;
            border-radius: 5px;
        }

        .otherusermsg {
            background-color: #5fc9f8;
            border: 1px solid #5fc9f8;
        }

        .firstusermsg {
            margin-left: 85%;
            background-color: #53d769;
            border: 1px solid #53d769;
        }
    </style>
    <Script>
        setInterval(() => {

        }, 500);
    </Script>
</body>

</html>