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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SCO-ENICAR</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
    <script src="./assets/dist/js/jquery.min.js"></script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="http://www.enicarthage.rnu.tn/">SCO-Enicar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Groupes</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="afficherEtudiantsParClasse.php">Etudiants par Groupe</a>
                        <a class="dropdown-item" href="ajouterGroupe.php">Ajouter Groupe</a>
                        <a class="dropdown-item" href="supprimerGroupe.php">Supprimer Groupe</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Etudiants</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="afficherEtudiants.php">Lister tous les étudiants</a>
                        <a class="dropdown-item" href="ajouterEtudiant.php">Ajouter Etudiant</a>
                        <a class="dropdown-item" href="chercherEtudiant.php">Chercher Etudiant</a>
                        <a class="dropdown-item" href="modifierEtudiant.php">Modifier Etudiant</a>
                        <a class="dropdown-item" href="supprimerEtudiant.php">Supprimer Etudiant</a>


                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Absences</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="saisirAbsence.html">Saisir Absence</a>
                        <a class="dropdown-item" href="etatAbsence.html">État des absences pour un groupe</a>
                    </div>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="deconnexion.php">Se Déconnecter <span class="sr-only">(current)</span></a>
                </li>

            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Saisir un groupe" aria-label="Chercher un groupe">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher Groupe</button>
            </form>
        </div>
    </nav>
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

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>INFO1</h2>
                    <p>Vous pouvez gérer la classe INFO 1</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Voir les Groupes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>INFO2</h2>
                    <p>Vous pouvez gérer la classe INFO 2</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Voir les Groupes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>INFO3</h2>
                    <p>Vous pouvez gérer la classe INFO 3</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Voir les Groupes &raquo;</a></p>
                </div>
            </div>
            <div class="container" align="center">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-6">
                        <h2>INFO4</h2>
                        <p>Vous pouvez gérer la classe INFO 4</p>
                        <p><a class="btn btn-secondary" href="#" role="button">Voir les Groupes &raquo;</a></p>
                    </div>
                    <div class="col-md-6">
                        <h2>INFO5</h2>
                        <p>Vous pouvez gérer la classe INFO 5</p>
                        <p><a class="btn btn-secondary" href="#" role="button">Voir les Groupes &raquo;</a></p>
                    </div>

                </div> <!-- /container -->

    </main>


    <footer class="container">
        <p>&copy; ENICAR 2021-2022</p>
    </footer>




</body>

</html>