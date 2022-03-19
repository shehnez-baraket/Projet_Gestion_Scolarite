<!DOCTYPE html>
<html lang="en">

<head>

  <title>SCO-ENICAR Saisir Absence</title>

</head>

<body>
  <?php include('entete.html'); ?>
  <main role="main">
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Signaler l'absence pour tout un groupe</h1>
        <p>Pour signaler, annuler ou justifier une absence, choisissez d'abord le groupe, le module puis l'étudiant concerné!</p>
      </div>
    </div>

    <div class="container">
      <form>
        <div class="form-group">
          <label for="semaine">Choisir une semaine:</label><br>
          <input id="semaine" type="week" name="debut" size="10" class="datepicker" />
        </div>
        <div class="form-group">
          <label for="classe">Choisir un groupe:</label><br>
          <!--
<input list="classe">
<datalist id="classe" name="classe">
    <option value="1-INFOA">1-INFOA</option>
    <option value="1-INFOB">1-INFOB</option>
    <option value="1-INFOC">1-INFOC</option>
    <option value="1-INFOD">1-INFOD</option>
    <option value="1-INFOE">1-INFOE</option>
</datalist>
-->
          <select id="classe" name="classe" class="custom-select custom-select-sm custom-select-lg">
            <option value="1-INFOA">1-INFOA</option>
            <option value="1-INFOB">1-INFOB</option>
            <option value="1-INFOC">1-INFOC</option>
            <option value="1-INFOD">1-INFOD</option>
            <option value="1-INFOE">1-INFOE</option>
          </select>
        </div>


        <div class="form-group">
          <label for="module">Choisir un module:</label><br>
          <select id="module" name="module" class="custom-select custom-select-sm custom-select-lg">
            <option value="1-INFOA">Tech. Web</option>
            <option value="1-INFOB">SGBD</option>
          </select>
        </div>

        <table rules="cols" frame="box">
          <tr>
            <th>25 étudiants</th>

            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Lundi</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Mardi</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Mercredi</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Jeudi</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Vendredi</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Samedi</th>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">07/03/2022</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">08/03/2022</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">09/03/2022</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">10/03/2022</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">11/03/2022</th>
            <th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">12/03/2022</th>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <th>AM</th>
            <th>PM</th>
            <th>AM</th>
            <th>PM</th>
            <th>AM</th>
            <th>PM</th>
            <th>AM</th>
            <th>PM</th>
            <th>AM</th>
            <th>PM</th>
            <th>AM</th>
            <th>PM</th>
          </tr>
          <tr class="row_3">
            <td><b>M. WALID SAAD</b></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
          </tr>

          <tr class="row_3">
            <td><b>M. WALID SAAD</b></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
          </tr>
        </table>
        <br>
        <!--Bouton Valider-->
        <button type="submit" class="btn btn-primary btn-block">Valider</button>
      </form>
    </div>
  </main>

  <?php
  include('footer.html'); ?>
</body>

</html>