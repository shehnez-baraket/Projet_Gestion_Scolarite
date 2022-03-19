<?php
@$classe = $_POST["classe"];
@$chercher = $_POST["chercher"];
$erreur = "";
if (isset($chercher)) {

  include("connexion.php");
  $sel = $pdo->prepare("select * from etudiant where class=? limit 1");
  $sel->execute($classe);
  $tab = $sel->fetchAll();
  if (count($tab) > 0) {
    $outputs["etudiants"] = array();
    while ($row = $reponse->fetch(PDO::FETCH_ASSOC)) {
      $etudiant = array();
      $etudiant["cin"] = $row["cin"];
      $etudiant["nom"] = $row["nom"];
      $etudiant["prenom"] = $row["prenom"];
      $etudiant["adresse"] = $row["adresse"];
      $etudiant["email"] = $row["email"];
      $etudiant["Classe"] = $row["Classe"];
    }
  } else {
    $erreur = "Il n'existe aucun étudiant dans ce groupe!!";
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
  <title>SCO-ENICAR Etudiants Par CLasse</title>
  <!-- Bootstrap core CSS -->
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap core JS-JQUERY -->
  <script src="./assets/dist/js/jquery.min.js"></script>
  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="./assets/jumbotron.css" rel="stylesheet">

</head>

<body>
  <?php
  include('entete.html'); ?>

  <main role="main">
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Afficher la liste d'étudiants par groupe</h1>
        <p>Cliquer sur la liste afin de choisir une classe!</p>
      </div>
    </div>
    <div class="container">
      <div class="form-group" width="60%">
        <label for="usr">Veuilez taper le groupe :</label>
        <input type="text" class="form-control" name="classe" required pattern="INFO[1-3]{1}-[A-E]{1}">
      </div>
      <button type="button" class="btn btn-primary" name="chercher">Chercher</button>
    </div>
  </main>

  <footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
</body>

</html>