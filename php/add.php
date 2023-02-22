<?php 

require "connexion.php";


if (isset($_POST['submit'])){
    $name= $_POST['name'];
    $firstname= $_POST['firstname'];
    $email= $_POST['email'];
    $comment= $_POST['comment'];
    $add='INSERT INTO users (name,firstname,email,comment) VALUES ("'.$name.'","'.$firstname.'","'.$email.'","'.$comment.'");';
    $ps= $bdd->prepare($add);
    $ps -> execute();
}
  //honeypot

  if (!empty($_POST['email_confirm'])){
    die('Une erreur est survenue. Veuillez réessayer plus tard.');
  }
  