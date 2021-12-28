<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion-chatapp</title>
</head>

<body>
    <?php
    if (isset($_SESSION['connfailed']) && $_SESSION['connfailed'] == true) {
        echo "connexion echouée";
    }
    ?>
    <div class="form">
        <form action="process_login.php" method="post">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="pswd" id="pswd" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
            <a href="login.php">Pas encore inscrit ? cliquez ici</a>
        </form>
    </div>

</body>

</html>