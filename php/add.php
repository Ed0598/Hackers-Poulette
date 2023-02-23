<?php 

require "connexion.php";
require "script.php";


if (isset($_POST['submit'])){

    $add = "INSERT INTO `users` (`name`, `firstname`, `email`, `comment`) VALUES (:name, :firstname, :email, :comment)";
    $ps= $bdd->prepare($add);
    $ps->bindValue(':name', $name);
    $ps->bindValue(':firstname', $firstname);
    $ps->bindValue(':email', $email);
    $ps->bindValue(':comment', $comment);
    try {
      //code...
      $ps -> execute();
    } catch (\Exception $th) {
      //throw $th;
      echo 'Cela ne fonctionne pas';
    }
}
