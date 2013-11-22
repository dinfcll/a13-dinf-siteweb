<!DOCTYPE html>
<html>
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
    <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <title>Page d'administration du formulaire d'activit&eacute;s</title>
</head>
<body>

<h1>Page d'administration du formulaire d'activit&eacute;s</h1><br><br>

//Affichage des événements en cours

//Titre : Activites en cours
//Cliquez ici pour ajouter un nouvel événement (lien href ; bouton)

//Boucle d'affichage des activites (foreach --> exemple sur Moodle)
//Nom de l'evenement (Evenement::NomEvenement)
//Nom du professeur (Evenement::NomProfesseur)
//Description resumee (Evenement::DescriptionEvenementResume)

//Bouton Afficher
<form method="link" action="evenementafficher.php">
    <input type="submit" value="Afficher l'&eacute;v&eacute;nement">
</form>
//Bouton Modifier (exemple sur Moodle)
<form method="link" action="evenementmodifier.php">
    <input type="submit" value="Modifier l'&eacute;v&eacute;nement">
</form>
//Bouton Supprimer
<form method="link" action="evenementsupprimer.php">
    <input type="submit" value="Supprimer l'&eacute;v&eacute;nement">
</form>

<?php
    include('footer.php');
?>

</body>
</html>
