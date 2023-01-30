<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
  
    $valid = true;
  
    if (!preg_match('/^[a-zA-ZÀ-ÿ|\s]{2,255}$/u', $name)) {
      echo "<p>Le nom est invalide</p>";
      $valid = false;
    } 
    if (!preg_match('/^[a-zA-Z]{2,255}$/', $firstname)) {
      echo "<p>Le prénom est invalide</p>";
      $valid = false;
    }
    if (!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $email)) {
      echo "<p>L'adresse email est invalide</p>";
      $valid = false;
    }
    if (!preg_match('/^[a-zA-Z]{2,5}$/', $comment)) {
      echo "<p>Le commentaire ne respecte pas les limites de caractères</p>";
      $valid = false;
    }
  
    if ($valid) {
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $comment = filter_var($comment, FILTER_SANITIZE_STRING);
    }
  }


