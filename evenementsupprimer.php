<!DOCTYPE html>
<html>
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
    <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <title>Supprimer un &eacute;v&eacute;nement</title>
</head>
<body>

//Header : configadmin.php

//Voulez-vous supprimer l'événement suivant?
//1) Nom de l'activite (Evenement::NomEvenement)
//2) Nom du professeur (Evenement::NomProfesseur)
//3) Adresse courriel pour l'envoi (Evenement::AdresseCourriel)
//4) Description breve (Boite a une seule ligne)

<?php
    include('footer.php');
?>

</body>
</html>

