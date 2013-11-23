<?php
    include('headeradmin.php');
    include('mysqlconnection.php')
?>
<h1>Voulez-vous vraiment supprimer l'&eacute;v&eacute;nement suivant?</h1><br><br>

<!--1) Nom de l'activité (Evenement::NomEvenement)-->
<br><br>
<!--2) Nom du professeur (Evenement::NomProfesseur)-->
<br><br>
<!--3) Description brève (Boite à une seule ligne)-->
<br><br>
<!--4) Description détaillée
<br><br><br><br>
<!--Bouton Supprimer l'événement-->
<form method="link" action="evenementsupprimer2.php">
    <input type="submit" value="Supprimer l'&eacute;v&eacute;nement">
</form>
<br><br>
<!--Bouton retour à l'accueil Événement-->
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