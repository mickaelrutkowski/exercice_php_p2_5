<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $gender = "homme";
     settype($gender, "string");

  //settype definir le type de variable

  if ($gender == "homme")
 {
    echo "C'est un développeur !!!";
 }
 // sinon si votre age est superieur ou egal a 18 alors vous etes majeur
 else
 {
    echo "C'est une développeuse !!!";
 }
 // sinon vous n'avez pas du rentré votre age car la variable ne contient pas de nombre
 ?>
</body>
</html>
