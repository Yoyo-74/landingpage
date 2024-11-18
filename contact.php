<?php

$nom     = $_POST['nom'];
$prenom  = $_POST['prenom'];
$adresse = $_POST['adresse'];
$cp      = $_POST['cp'];
$ville   = $_POST['ville'];
$email   = $_POST['email'];
$tel     = $_POST['tel'];
$comment = $_POST['comment'];

if(isset($valider)){
    if(empty($nom))
       $message='<div class="erreur">Nom obligatoire.</div>';
    elseif(empty($prenom))
       $message='<div class="erreur">Prénom obligatoire.</div>';
    elseif(empty($adresse))
       $message='<div class="erreur">Adresse obligatoire.</div>';
    elseif(empty($cp))
       $message='<div class="erreur">CP obligatoire.</div>';
    elseif(empty($ville))
       $message='<div class="erreur">Ville obligatoire.</div>';
    elseif(empty($email))
       $message='<div class="erreur">Email obligatoire.</div>';
    elseif(empty($tel))
       $message='<div class="erreur">Tel obligatoire.</div>';
    else{
         $message='<div class="rappel"></div>';
    }
}

header('Location:index.php?message=' . $message);

?>




