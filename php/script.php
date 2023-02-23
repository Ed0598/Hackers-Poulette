<?php 

require 'connexion.php';



$name = trim($_POST['name']);
$firstname = trim($_POST['firstname']);
$email = trim($_POST['email']);
$comment = trim($_POST['comment']);
$valid = true;

if (isset($_POST['submit'])) {
  if (empty($name)) 
  {
    $nameerror= "<p> Le nom est obligatoire</p>";
    if (!htmlspecialchars($name)) 
    {
      $nameerror= "<p> Le nom est invalide</p>";
      $valid = false;
    } 
  } if (empty($firstname))
  {
    $firstnameerror= "<p> Le prénom est obligatoire</p>";
    if (!htmlspecialchars($firstname))
    {
      $firstnameerror="<p> Le prénom est invalide </p>";
      $valid = false;
    }
  }
  if (empty($email))
  {
    $emailerror= "<p>L'adresse email est obligatoire</p>";
    if (!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $email))
    {
      $email= filter_var($email, FILTER_SANITIZE_EMAIL);
      $emailerror="<p>L'adresse email est invalide</p>";
      $valid = false;
    }
  }
  if (empty($comment)){
    $commenterror= "<p>Le commentaire est obligatoire</p>";
    if (!preg_match('/^[a-zA-Z]{250,1000}$/', $comment)) {
      $commenterror= "<p>Le commentaire ne respecte pas les limites de caractères</p>";
      $valid = false;
    }
  }
}


  //honeypot

  if (!empty($_POST['email_confirm'])){
    die('Une erreur est survenue. Veuillez réessayer plus tard.');
  }

  
  
