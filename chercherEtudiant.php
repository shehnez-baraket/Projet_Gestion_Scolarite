<?php

@$cin = $_POST["CIN"];
@$chercher = $_POST["chercher"];
$erreur = "";
if (isset($chercher)) {

    include("connexion.php");
    $sel = $pdo->prepare("select * from etudiant where cin=? limit 1");
    $sel->execute(array($cin));
    $tab = $sel->fetchAll();
    if (count($tab) > 0) {
        echo ($tab['nom']);
        echo ($tab['prenom']);
        echo ($tab['classe']);
        echo ($tab['adresse']);
        echo ($tab['email']);
    } else {
        $erreur = "Il n'y a ausun étudiant avec ce numéro de CIN";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SCO-ENICAR Etudiants Par CLasse</title>
</head>

<body>

    <?php
    include('entete.html'); ?>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">Chercher un étudiant </h1>
                <p>Tapez le numéro de la carté d'identité pour avoir toutes les informations d'un étudiant! </p>
            </div>
        </div>
        <div class="container">
            <div class="form-group" width="60%">
                <label for="usr">Numéro de CIN :</label>
                <input type="number" class="form-control" id="CIN" required pattern="[0-9]{8}">
            </div>
            <button margin-left="10px" type="button" class="btn btn-primary" name="chercher">Chercher</button>
        </div>

        <footer class="container">
            <p>&copy; ENICAR 2021-2022</p>
        </footer>
</body>

</html>