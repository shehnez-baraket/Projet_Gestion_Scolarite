<?php
@$grp = $_POST["grp"];
@$supprimer = $_POST["supprimer"];
$erreur = "";
if (isset($supprimer)) {

    include("connexion.php");
    $sel = $pdo->prepare("select nomGrp from groupe where nomGrp=? limit 1");
    $sel->execute(array($grp));
    $tab = $sel->fetchAll();
    if (count($tab) > 0) {
        $req = "DELETE FROM groupe WHERE nomGrp='$grp' limit 1";
        $reponse = $pdo->exec($req) or die("error");
        $erreur = "Suppression effectuée avec succés";
    } else {
        $erreur = "Groupe inexistant ! Veuillez vérifier les données saisies"; // Etudiant existe déja
    }
    echo $erreur;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCO-ENICAR Supprimer Groupe</title>
    <style>
        .erreur {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include("entete.html");
    ?>
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">Supprimer un groupe</h1>
                <p>Cliquer sur le bouton afin de supprimer un groupe!</p>
            </div>
        </div>
        <div class="container">

            <form id="myForm" method="POST">
                <!--Nom-->
                <div class="form-group">
                    <label for="grp">Groupe:</label><br>
                    <input type="text" id="grp" name="grp" class="form-control" required autofocus>
                </div>
                <input type="submit" name="supprimer" class="btn btn-primary btn-block" value="Supprimer">
            </form>
        </div>
        <div class="erreur"><?php echo $erreur ?></div>

        <?php
        include("footer.html");
        ?>
    </main>
</body>

</html>