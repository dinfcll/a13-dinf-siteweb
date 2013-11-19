<!DOCTYPE html>
<html>
<head>
    <?php
        include('headeradmin.php');
    ?>
    <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>

//Header : configadmin.php

//Boucle de recuperation des donnees

//Modifier un evenement dans la base de donnees
//1) Nom de l'activite (Evenement::NomEvenement)
//2) Nom du professeur (Evenement::NomProfesseur)
//3) Adresse courriel pour l'envoi (Evenement::AdresseCourriel)
//4) Description breve (Boite a une seule ligne)
//5) Description detaillee (Boite a plusieurs lignes)
//<textarea maxlength="50" rows="40">asdf</textarea>

//Fin de la boucle de recuperation des donnees

//Bouton "Sauvegarder"
//Bouton pour revenir a la page d'accueil

<?php
    include('footer.php');
?>

</body>
</html>

