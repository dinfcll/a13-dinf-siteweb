<!DOCTYPE html>
<html>
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
    <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <title>Modifier un &eacute;v&eacute;nement</title>
</head>
<body>

<h1>Modifier un &eacute;v&eacute;nement</h1><br><br>

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
<form method="link" action="evenementadmin.php">
    <input type="submit" value="Page admin &Eacute;v&eacute;nement">
</form>

<?php
    include('footer.php');
?>

</body>
</html>