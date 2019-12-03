<?php
$age = 17;
$sexe = "Femme"
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex5</title>
  </head>
  <body>
      <p>
        <?php
        if ($age >= 18 & $sexe == "Homme") {
        echo "Vous êtes un homme et vous êtes majeur";
        } elseif ($age < 18 & $sexe == "Homme") {
            echo "Vous êtes un homme et vous êtes mineur";
          } elseif ($age >= 18 & $sexe == "Femme") {
                echo "Vous êtes une femme majeur";
              } elseif ($age < 18 & $sexe == "Femme"){
                echo "Vous êtes une femme mineur";
              }
        ?>
      </p>
  </body>
</html>
