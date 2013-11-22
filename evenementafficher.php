<!DOCTYPE html>
<html>
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
    <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <title>Affichage complet de l'&eacute;v&eacute;nement</title>
</head>
<body>
<h1>Affichage complet de l'&eacute;v&eacute;nement</h1>

//Header : configadmin.php

//Afficher un evenement dans la base de donnees
//1) Nom de l'activite (Evenement::NomEvenement)
//2) Nom du professeur (Evenement::NomProfesseur)
//3) Adresse courriel pour l'envoi (Evenement::AdresseCourriel)
//4) Description breve (Boite a une seule ligne)
//5) Description detaillee (Boite a plusieurs lignes)

//Bouton pour revenir a la page d'accueil

<?php
    include('footer.php');
?>

</body>
</html>