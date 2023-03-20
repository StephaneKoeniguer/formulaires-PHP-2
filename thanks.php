<?php

// tableau d'erreurs
$errors = [];

// vérification des champs et nettoyage
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_POST['user_name']) || trim($_POST['user_name']) === ''){
        $errors[] = 'Le nom est obligatoire';
    }
    if(!isset($_POST['user_prenom']) || trim($_POST['user_prenom']) === ''){
        $errors[] = 'Le prenom est obligatoire';
    }
    if(!isset($_POST['user_sujet']) || trim($_POST['user_sujet']) === ''){
        $errors[] = 'La raison de votre demande est obligatoire';
    }
    if(!isset($_POST['user_mail']) ||  trim($_POST['user_mail']) === '' || filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL) === false){
        $errors[] = 'Votre email est obligatoire.';
    }
    if(!isset($_POST['user_phone']) || trim($_POST['user_phone']) === ''){
        $errors[] = 'Votre numéro de téléphone est obligatoire';
    }
    if(!isset($_POST['user_message']) || trim($_POST['user_message']) === ''){
        $errors[] = 'Vous devez saisir un message';
    }
}


// affiche message s'il n'y a pas d'erreurs.
if (empty($errors)){
    echo 'Merci, ' . $_POST['user_name'] . ' ' . $_POST['user_prenom'] . ' de nous avoir contacté à propos de ' . $_POST['user_sujet'] . '. <br>';
    echo '<br>';
    echo 'Un de nos conseillers vous contactera soit à l\'adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' . $_POST['user_phone'] .
        ' dans les plus brefs délais pour traiter votre demande : <br>';
    echo '<br>';
    echo $_POST['user_message'];
}else{
    foreach ($errors as $error) {
        echo $error, "<br>";
    }
}

?>

