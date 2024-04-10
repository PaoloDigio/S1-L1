<?php
  $serieA = [
    "Roma" => ["Svilar", "Smalling", "Paredes", "Dybala", "El Shaarawy"],
    "Inter" => ["Sommer", "Acerbi", "Miki", "Barella", "Lautaro"],
    "Milan" => ["Maignan", "Hernandez", "Leao", "Pulisic", "Giroud"],
    "Napoli" => ["Meret", "Mario Rui", "Zielinski", "Osimhen", "Kvara"]
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Serie A</h1>
  <ul><?php
      foreach($serieA as $team => $players) { ?>
        <li><?php
          echo $team ?>
          <ul><?php
              foreach($players as $player) { ?>
                <li><?php
                  echo $player ?>
                </li> <?php
              } ?>
          </ul> 
        </li> <?php
      } ?>

  </ul>
</body>
</html>