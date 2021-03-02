<?php

// è il php dedicato al frontend (alla view)

// per la prima milestone
require_once __DIR__ . '/database/database.php';

// qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
// e stampare copertina, titolo e così via, come da screenshot.
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
</head>
<body>
      <?php foreach($dischi as $key => $dischiValue) { ?>
          
          <div>
  <div class='content'>
        <h2><?php echo $dischiValue['title']?></h2>
        <h3><?php echo $dischiValue['author']?></h3>
        <img src="<?php echo $dischiValue['poster']?>" alt="">   
        </div>
        </div>
        <?php } ?>

    
</body>
</html>


