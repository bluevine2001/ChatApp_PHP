<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription-chatapp</title>
</head>

<body>
    <div class="form">
        <form action="process_signup.php" method="post">
            <input type="text" name="fname" id="fname" placeholder="Prénom" required>
            <input type="text" name="lname" id="lname" placeholder="Nom" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="pswd" id="pswd" placeholder="Mot de passe" required>
            <input type="submit" value="S'inscrire">
            <a href="login.php">Déja inscrit ? cliquez ici</a>
        </form>
    </div>

</body>

</html>