<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie6_Exo4</title>
</head>
<body>
  <?php
  //Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
  //index.php?language=PHP&server=LAMP
  ?>
  <a href="index.php?language=PHP&server=LAMP">Envoi Info dans l'URL</a>
  <?php
  if (isset($_GET['language'])){
    //isset est une fonction qui détermine si une variable est définie et est différente de NULL
    ?>
    <p><?php echo 'Le language est défini' . ' ' . $_GET['language']; ?></p>
    <?php
  } else {?>
    <p>Le paramétre language n'est pas présent dans l'URL</p>
    <?php
  }
  ?>
  <?php
  if (isset($_GET['server'])){
    ?>
    <p><?php echo 'Le server est défini' . ' ' . $_GET['server']; ?></p>
    <?php
  } else {?>
    <p>Le paramétre server n'est pas présent dans l'URL</p>
    <?php
  }
  
    ?>
</body>
</html>
