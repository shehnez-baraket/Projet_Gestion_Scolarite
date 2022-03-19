<!DOCTYPE html>
<html lang="en">

<head>

  <title>SCO-ENICAR Afficher Etudiants</title>

  <style>
    table,
    th,
    td {
      border: 1px solid grey;
      border-collapse: collapse;
      padding: 5px;
    }

    table tr:nth-child(odd) {
      background-color: #f1f1f1;
    }

    table tr:nth-child(even) {
      background-color: #ffffff;
    }
  </style>
  </style>
</head>

<body>
  <?php
  include('entete.html'); ?>

  <main role="main">
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Liste des étudiants</h1>
        <p>Cliquer sur le bouton afin d'actualiser la liste!</p>
      </div>
    </div>

    <p id="demo" align="center">Liste vide</p>
    <button type="submit" class="btn btn-primary btn-block active" onclick="refresh()">Actualiser</button>
    <script>
      function refresh() {
        var xmlhttp = new XMLHttpRequest();
        var url = "http://localhost/mini-projet-info1/auth-php-mysql/afficher.php";

        //Envoie de la requete
        xmlhttp.open("GET", url, true);
        xmlhttp.send();


        //Traiter la reponse
        xmlhttp.onreadystatechange = function() { // alert(this.readyState+" "+this.status);
          if (this.readyState == 4 && this.status == 200) {

            myFunction(this.responseText);
            // alert(this.responseText);
            //console.log(this.responseText);
            //console.log(this.responseText);
          }
        }


        //Parse la reponse JSON
        function myFunction(response) {
          var obj = JSON.parse(response);
          //alert(obj.success);

          if (obj.success == 1) {
            var arr = obj.etudiants;
            var i;
            var out = "<table border=1 >";
            for (i = 0; i < arr.length; i++) {
              out += "<tr><td>" +
                arr[i].cin +
                "</td><td>" +
                arr[i].nom +
                "</td><td>" +
                arr[i].prenom +
                "</td><td>" +
                arr[i].adresse +
                "</td><td>" +
                arr[i].email +
                "</td></tr>";
            }
            out += "</table>";
            document.getElementById("demo").innerHTML = out;
          } else document.getElementById("demo").innerHTML = "Aucune Inscription!";

        }
      }
    </script>
  </main>


  <footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
</body>

</html>