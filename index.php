<?php
session_start();
if ($_SESSION["autoriser"] != "oui") {
    header("location:login.php");
    exit();
}
if (date("H") < 18)
    $bienvenue = "Bonjour et bienvenue " .
        $_SESSION["prenomNom"];
else
    $bienvenue = "Bonsoir et bienvenue " .
        $_SESSION["prenomNom"];
?>
<!doctype html>
<html lang="en">

<head>
    <title>SCO-ENICAR</title>
</head>

<body><?php
        include("entete.html");
        ?>

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3"> <?php echo $bienvenue ?></h1>
                <p>Bienvenue dans votre espace personnel de gestion de scolarité.</p>
                <p> pouvez gérer vos classes ainsi que l'état d'absence.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Mes Groupes &raquo;</a></p>
            </div>
        </div>

        <div class="container" align="center">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>INFO1</h2>
                    <p>Vous pouvez gérer la classe INFO 1</p>
                    <p><a class="btn btn-secondary" href="ajouterGroupe.php" role="button">Voir les Groupes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>INFO2</h2>
                    <p>Vous pouvez gérer la classe INFO 2</p>
                    <p><a class="btn btn-secondary" href="ajouterGroupe.php" role="button">Voir les Groupes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>INFO3</h2>
                    <p>Vous pouvez gérer la classe INFO 3</p>
                    <p><a class="btn btn-secondary" href="ajouterGroupe.php" role="button">Voir les Groupes &raquo;</a></p>
                </div>
            </div>
            <div class="container" align="center">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-6">
                        <h2>INFO4</h2>
                        <p>Vous pouvez gérer la classe INFO 4</p>
                        <p><a class="btn btn-secondary" href="ajouterGroupe.php" role="button">Voir les Groupes &raquo;</a></p>
                    </div>
                    <div class="col-md-6">
                        <h2>INFO5</h2>
                        <p>Vous pouvez gérer la classe INFO 5</p>
                        <p><a class="btn btn-secondary" href="ajouterGroupe.php" role="button">Voir les Groupes &raquo;</a></p>
                    </div>

                </div> <!-- /container -->

    </main>


    <?php include('footer.html'); ?>




</body>

</html>