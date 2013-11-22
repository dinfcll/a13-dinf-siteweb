<!DOCTYPE html>
<html>
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
    <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <title>Ajouter un &eacute;v&eacute;nement</title>
</head>
<body>
<h1>Ajouter un &eacute;v&eacute;nement</h1><br><br>

//Ajouter un evenement dans la base de donnees
//1) Nom de l'activite (Evenement::NomEvenement)
//<br>
//2) Nom du professeur (Evenement::NomProfesseur)
//<br>
//3) Adresse courriel pour l'envoi (Evenement::AdresseCourriel)
//<br>
//4) Description breve (Boite a une seule ligne)
//<br>
//5) Description detaillee (Boite a plusieurs lignes)
//<textarea maxlength="50" rows="40">asdf</textarea><br><br>

//Bouton "Sauvegarder"
<form method="link" action="evenementajouter2.php">
    <input type="submit" value="Accueil">
</form>

//Bouton pour revenir a la page d'accueil
<form method="link" action="evenementadmin.php">
    <input type="submit" value="Page admin &Eacute;v&eacute;nement">
</form>

//Bouton pour aller à la page d'administrateur centrale
<form method="link" action="indexadmin.php">
    <input type="submit" value="Page admin Centrale">
</form>

<?php
    include('footer.php');
?>

</body>
</html>