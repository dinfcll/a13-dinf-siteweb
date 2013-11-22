<!DOCTYPE html>
<html>
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
    <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body>

<h1>Supprimer un &eacute;v&eacute;nement</h1><br><br>

//Voulez-vous supprimer l'événement suivant?
//1) Nom de l'activite (Evenement::NomEvenement)
//2) Nom du professeur (Evenement::NomProfesseur)
//3) Adresse courriel pour l'envoi (Evenement::AdresseCourriel)
//4) Description breve (Boite a une seule ligne)

//Bouton Supprimer


//Bouton retour à l'accueil
<form method="link" action="evenementadmin.php">
    <input type="submit" value="Page admin &Eacute;v&eacute;nement">
</form>



<?php
    include('footer.php');
?>

</body>
</html>