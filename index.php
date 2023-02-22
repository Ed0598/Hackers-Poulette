<?php 
require '/wamp64/www/variable/Hackers-Poulette/php/connexion.php';
require '/wamp64/www/variable/Hackers-Poulette/php/script.php';
require '/wamp64/www/variable/Hackers-Poulette/php/add.php';
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <script defer src="./assets/js/validation.js"></script>
    <title>Hackers Poulette</title>
</head>
<body>
    <h2>Formulaire de réclamation ! </h2>
    <form action="" method="post" id="form" >
        <label for="name">Name *</label>
        <input type="text" name="name" id="input_name" >
        <?php echo (isset($nameerror))? $nameerror : "";?>
        <label for="firstname">Firstname *</label>
        <input type="text" name="firstname" id="input_firstname">
        <?php echo (isset($firstnameerror))? $firstnameerror : "";?>
        <label for="email">Email *</label>
        <input type="text" name="email" id="input_email">
        <?php echo (isset($emailerror))? $emailerror : "";?>
        <input type="text" name="email_confirm" style="display:none">
        <label for="comment" id="label_comment">Comment *</label>
        <textarea name="comment" id="input_comment" cols="30" rows="10"></textarea>
        <?php echo (isset($commenterror))? $commenterror : "";?>
        <button type="submit"name="submit">Envoyer</button>
    </form>
    
</body>
</html>
