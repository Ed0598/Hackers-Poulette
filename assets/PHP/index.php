<?php 
require 'connexion.php';
require 'script.php';
require 'add.php';
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="../css/style.css">
    <title>Hackers Poulette</title>
</head>
<body>
    <h2>Réclamation</h2>
    <form action=""method="post" >
        <label for="name">Name</label>
        <input type="text" name="name" id="input_name" required >
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="input_firstname" required>
        <label for="email">Email</label>
        <input type="text" name="email" id="input_email" required>
        <input type="text" name="email_confirm" style="display:none">
        <label for="comment">Comment</label>
        <input type="text" name="comment" id="input_comment" required>
        <button type="submit"name="submit">Envoyer</button>
    </form>
</body>
</html>