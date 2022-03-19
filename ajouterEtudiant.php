<!DOCTYPE html>
<html lang="en">

<head>

  <title>SCO-ENICAR Ajouter Etudiant</title>

</head>

<body>
  <?php
  include('entete.html'); ?>
  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Ajouter un étudiant</h1>
        <p>Cliquer sur le bouton afin d'ajouter un étudiant!</p>
        <h1>
          <div id="demo"></div>
        </h1>
      </div>
    </div>

    <div class="container">

      <form id="myForm" method="POST">
        <!--Nom-->
        <div class="form-group">
          <label for="nom">Nom:</label><br>
          <input type="text" id="nom" name="nom" class="form-control" required autofocus>
        </div>
        <!--Prénom-->
        <div class="form-group">
          <label for="prenom">Prénom:</label><br>
          <input type="text" id="prenom" name="prenom" class="form-control" required>
        </div>
        <!--Email-->
        <div class="form-group">
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <!--CIN-->
        <div class="form-group">
          <label for="cin">CIN:</label><br>
          <input type="text" id="cin" name="cin" class="form-control" required pattern="[0-9]{8}" title="8 chiffres" />
        </div>
        <!--Password-->
        <div class="form-group">
          <label for="pwd">Mot de passe:</label><br>
          <input type="password" id="pwd" name="pwd" class="form-control" required pattern="[a-zA-Z0-9]{8,}" title="Au moins 8 lettres et nombres" />
        </div>
        <!--ConfirmPassword-->
        <div class="form-group">
          <label for="cpwd">Confirmer Mot de passe:</label><br>
          <input type="password" id="cpwd" name="cpwd" class="form-control" required />
        </div>
        <!--Classe-->
        <div class="form-group">
          <label for="classe">Classe:</label><br>
          <input type="text" id="classe" name="classe" class="form-control" required pattern="INFO[1-3]{1}-[A-E]{1}" title="Pattern INFOX-X. Par Exemple: INFO1-A, INFO2-E, INFO3-C">
        </div>
        <!--Adresse-->
        <div class="form-group">
          <label for="adresse">Adresse:</label><br>
          <textarea id="adresse" name="adresse" rows="10" cols="30" class="form-control" required></textarea>
        </div>
        <!--Bouton Ajouter-->
        <input type="submit" class="btn btn-primary btn-block" onclick="ajouter()" value="Ajouter">
      </form>

    </div>
  </main>
  <script>
    function ajouter() {
      var xmlhttp = new XMLHttpRequest();
      var url = "http://localhost/mini-projet-info1/Mini-Proj/ajouter.php";

      //Envoie Req
      xmlhttp.open("POST", url, true);

      form = document.getElementById("myForm");
      formdata = new FormData(form);

      xmlhttp.send(formdata);

      //Traiter Res

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
          if (this.responseText == "OK") {
            document.getElementById("demo").innerHTML = "L'ajout de l'étudiant a été bien effectué";
            document.getElementById("demo").style.backgroundColor = "green";
          } else {
            document.getElementById("demo").innerHTML = "L'étudiant est déjà inscrit, merci de vérifier le CIN";
            document.getElementById("demo").style.backgroundColor = "#fba";
          }
        }
      }


    }
  </script>
  <footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
  <script src="./assets/dist/js/inscrire.js"></script>
</body>

</html>