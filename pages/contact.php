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

    <div class="contact">
      <h2>Une question ?</h2>

      <form id="contact" action="../actions/validate_form.php" method="POST">
        <h3>Formulaire de Contact</h3>

        <legend>Prénom :</legend>
        <input type="text" autofocus name="firstname" value="">
        <legend>Nom :</legend>
        <input type="text" name="lastname" value="">
        <legend>Ton email :</legend>
        <input type="text" name="mail" value="">
        <legend>Ton message :</legend>
        <textarea name="name" rows="8" cols="50"></textarea>
        <br/>
        <input type="submit" name="" value="Je valide !">
      </form>
    </div>

    <?php include('../includes/footer.php'); ?>

  </body>
</html>
