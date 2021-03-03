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
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
     <header>
        <div class="container">
            <img src="../img/logo.png" alt="logo" />
            <select v-model="selected" name='search' @change='search'>
              <option value="">All</option>
              <option value="Rock">Rock</option>
              <option value="Pop">Pop</option>
              <option value="Jazz">Jazz</option>
              <option value="Metal">Metal</option>
            </select>
        </div>
     </header>

    <main> 

        <div class='cds-container container'> 
            <?php foreach($dischi as $dischiValue) { ?>        
            <div class="cd">
                    <img src="<?php echo $dischiValue['poster']?>" alt="">   
                    <h3><?php echo $dischiValue['title']?></h3>
                    <span><?php echo $dischiValue['author']?></span>
                    <span><?php echo $dischiValue['years']?></span>
                </div>
                <?php } ?>
            </div>
    </main>
    

    
</body>
</html>


