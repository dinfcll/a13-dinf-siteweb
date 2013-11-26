<html xmlns="http://www.w3.org/1999/html">
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
</head>
<div id="templatemo_content">
    <h1>Page d'administration du formulaire d'activit&eacute;s</h1><br><br>

    <!--Cliquez ici pour ajouter un nouvel événement (lien href ; bouton)-->
    <form method="link" action="evenementajouter.php">
        <input type="submit" value="Ajouter un nouvel &eacute;v&eacute;nement">
    </form>

    <!--Début de la boucle d'affichage des activites (foreach)-->
    <!--Nom de l'evenement (Evenement::NomEvenement)-->
    <!--Nom du professeur (Evenement::NomProfesseur)-->
    <!--Description resumee (Evenement::DescriptionEvenementResume)-->
    <br><br>
    <!--Bouton Afficher l'événement-->
    <form method="link" action="evenementafficher.php">
        <input type="submit" value="Afficher l'&eacute;v&eacute;nement">
    </form>
    <!--Bouton Modifier l'événement-->
    <form method="link" action="evenementmodifier.php">
        <input type="submit" value="Modifier l'&eacute;v&eacute;nement">
    </form>
    <!--Bouton Supprimer l'événement-->
    <form method="link" action="evenementsupprimer.php">
        <input type="submit" value="Supprimer l'&eacute;v&eacute;nement">
    </form>
    <!--Fin de la boucle d'affichage des activités-->

    <!--Bouton pour aller à la page d'administrateur centrale-->
    <form method="link" action="indexadmin.php">
        <input type="submit" value="Page admin Centrale">
    </form>
</div>
<?php
    include('footer.php');
?>