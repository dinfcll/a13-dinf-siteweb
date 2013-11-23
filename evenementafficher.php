<?php
    include('headeradmin.php');
    include('mysqlconnection.php')
?>
<h1>Affichage complet de l'&eacute;v&eacute;nement</h1><br><br>

<!--Afficher un evenement dans la base de donnees-->
<!--1) Nom de l'activité (Evenement::NomEvenement)-->
<br>
<!--2) Nom du professeur (Evenement::NomProfesseur)-->
<br>
<!--3) Adresse courriel pour l'envoi (Evenement::AdresseCourriel)-->
<br>
<!--4) Description brève (Boite a une seule ligne)-->
<br>
<!--5) Description détaillée (Boite a plusieurs lignes)-->
<br><br>

<!--Bouton Modifier (exemple sur Moodle)-->
<form method="link" action="evenementmodifier.php">
    <input type="submit" value="Modifier l'&eacute;v&eacute;nement">
</form>
<!--Bouton Supprimer-->
<form method="link" action="evenementsupprimer.php">
    <input type="submit" value="Supprimer l'&eacute;v&eacute;nement">
</form>
<br><br><br><br>

<!--Bouton pour revenir a la page d'accueil événement-->
<form method="link" action="evenementsadmin.php">
    <input type="submit" value="Page admin &Eacute;v&eacute;nement">
</form>
<!--Bouton pour aller à la page d'administrateur centrale-->
<form method="link" action="indexadmin.php">
    <input type="submit" value="Page admin Centrale">
</form>

<?php
    include('footer.php');
?>