<?php 


if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $firstname= $_POST['firstname'];
    $email= $_POST['email'];
    $comment= $_POST['comment'];

    switch(true){
        case empty($name):
            echo "Les champs sont obligatoires ! ";
            break;
        case empty($firstname):
            echo "Les champs sont obligatoires ! ";
            break;
        case empty($email):
            echo "Les champs sont obligatoires ! ";
            break;
        case empty($comment):
            echo "Les champs sont obligatoires ! ";
        break;
    };
}