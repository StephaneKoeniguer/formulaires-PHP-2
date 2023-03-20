<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

<form action ="thanks.php" method = "post" class ="container bg-light border rounded p-5">
    <h1 class="text-center">Votre message</h1>

    <div class="row">
        <label for ="nom" class="form-label">Nom :</label>
        <input type="text" id ="nom" name="user_name" required="required" class="form-control">
    </div>
    <div class="row">
        <label for ="prenom" class="form-label">Prénom :</label>
        <input type="text" id ="prenom" name="user_prenom" required="required"  class="form-control">
    </div>
    <div class="row">
        <label for="courriel" class="form-label">Email:</label>
        <input type="email" id="courriel" name="user_mail" required="required"  class="form-control">
    </div>
    <div class="row">
        <label for="phone" class="form-label">Numéro de téléphone :</label>
        <input type="tel" id="phone" name="user_phone" required="required"  class="form-control">
    </div>
    <div class="row">
        <label for="sujet">Votre demande concerne :</label>
        <select name="user_sujet" id="sujet" required="required">
        <option value="">--Choisir un sujet--</option>
        <option value="reclamation">Réclamation</option>
        <option value="felicitation">Félicitations</option>
        <option value="offre">Offre de reprise</option>
        <option value="rappel">Vous recontactez</option>
        <option value="faim">J'ai faim</option>
        <option value="divers">Divers</option>
        </select>
    </div>
    <div class="row">
        <label for="message" class="form-label">Message:</label>
        <textarea id="message" name="user_message" required="required" class="form-control"></textarea>
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>

</body>
</html>
