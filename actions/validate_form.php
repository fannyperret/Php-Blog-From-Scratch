<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php Blog From Scratch</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon-96x96.png">
  </head>
  <body>

    <?php include('../includes/header.php'); ?>
    <?php include('../includes/navbar.php'); ?>

    <div class="validate_form">
      <h2>Super !</h2>
      <p>Ton message avec tes coordonnées ont bien été envoyés ! Suivant le temps que j'ai, je te répondrais !</p>

      <form class="validate" action="../index.php" method="post">
        <input type="submit" name="" value="Retour à la page principale">
      </form>
    </div>

    <?php include('../includes/footer.php'); ?>

  </body>
</html>
