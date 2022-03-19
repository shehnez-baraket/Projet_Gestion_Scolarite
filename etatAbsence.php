<!DOCTYPE html>
<html lang="en">

<head>

  <title>SCO-ENICAR Etat Absence</title>

</head>

<body>
  <?php
  include('entete.html'); ?>
  <main role="main">
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">État des absences pour un groupe</h1>
        <p>Pour afficher l'état des absences, choisissez d'abord le groupe et la periode concernée!</p>
      </div>
    </div>

    <div class="container">
      <form>
        <table>
          <tr>
            <td>Date de début (j/m/a) : </td>
            <td>
              <input type="date" name="debut" size="10" value="01/09/2021" class="datepicker" />
            </td>
          </tr>
          <tr>
            <td>Date de fin : </td>
            <td>
              <input type="date" name="fin" size="10" value="12/03/2022" class="datepicker" />
            </td>
          </tr>
        </table>

        <div class="form-group">
          <label for="classe">Choisir une classe:</label><br>
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

        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr class="gt_firstrow ">
                <th>Nom</th>
                <th>Justifiées</th>
                <th>Non justifiées</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><b>M. SAAD WALID</b></td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td><b>M. SAAD WALID</b></td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>


            </tbody>
            <tfoot>
            </tfoot>
          </table>
        </div>

      </form>
    </div>
  </main>

  <footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
</body>

</html>