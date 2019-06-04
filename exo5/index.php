<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  .div {
    background-color: grey;
    font-weight: 400;
    border: 3px solid black;
    margin: 20px;
    padding: 20px;
    text-align: center;
    border-radius: 200px;
    font-weight: bolder;
  }
  .b {
    color: white;
  }
  </style>
</head>
<body>
  <div class="div">
    <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
    <p class="b"><?php
    $departement = array(80 => "Amiens", 02 => 'Aisne',62 => 'Pas-de-Calais',59 => 'Lille',60 => 'L\'oise');
    foreach ($departement as $x => $y) {
      echo $x .' => '. $y;
    }

    ?>
  </p>
  </div>
</body>
</html>
