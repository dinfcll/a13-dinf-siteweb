<html xmlns="http://www.w3.org/1999/html">
<head>
    <?php
        include('headeradmin.php');
        include('mysqlconnection.php')
    ?>
</head>
<div id="templatemo_content">
    <h1>Modifier un &eacute;v&eacute;nement</h1><br><br>

    <form method="link" action="evenementmodifier2.php">
        <!--1) Nom de l'activité (Evenement::NomEvenement)-->
        Nom de l'activit&eacute; : <input type="text" name="NomEvenement" size="25"><br>
        <!--2) Nom du professeur (Evenement::NomProfesseur)-->
        Nom du professeur : <input type="text" name="NomProfesseur" size="15"><br>
        <!--3) Adresse courriel pour l'envoi (Evenement::AdresseCourriel)-->
        Adresse courriel de r&eacute;ception : <input type="text" name="AdresseCourriel" size="25"><br>
        <!--4) Description brève (Boite à une seule ligne)-->
        Description br&eacute;ve : <input type="text" name="DescriptionEvenementResume" size="30"><br>
        <!--5) Description détaillée (Boîte à plusieurs lignes)-->
        Description d&eacute;taill&eacute;e : <br><textarea maxlength="50" rows="10">Texte ici</textarea>
        <br><br><br><br>
        <input type="submit" value="Enregistrer les modifications">
    </form>
    <br>

    <!--Bouton pour revenir a la page d'accueil-->
    <form method="link" action="evenementsadmin.php">
        <input type="submit" value="Page admin &Eacute;v&eacute;nement">
    </form>
    <!--Bouton pour aller à la page d'administrateur centrale-->
    <form method="link" action="indexadmin.php">
        <input type="submit" value="Page admin Centrale">
    </form>
</div>
<?php
    include('footer.php');
?>