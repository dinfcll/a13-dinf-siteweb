<!DOCTYPE html>
<html>
<head>
    <title>Page d'administration du formulaire d'activites</title>
</head>
<body>

//Affichage des événements en cours
//<textarea maxlength="50" rows="40">asdf</textarea>

//Titre : Activites en cours
//Cliquez ici pour ajouter un nouvel événement (lien href ; bouton)

//Boucle d'affichage des activites (foreach --> exemple sur Moodle)
//Nom de l'evenement (Evenement::NomEvenement)
//Nom du professeur (Evenement::NomProfesseur)
//Description resumee (Evenement::DescriptionEvenementResume)

//Bouton Afficher
<form method="link" action="afficherevenement.php">
    <input type="submit" value="Afficher l'evenement">
</form>
//Bouton Modifier (exemple sur Moodle)
<form method="link" action="modifierevenement.php">
    <input type="submit" value="Modifier l'evenement">
</form>
//Bouton Supprimer
<form method="link" action="supprimerevenement.php">
    <input type="submit" value="Supprimer l'evenement">
</form>

</body>
</html>
