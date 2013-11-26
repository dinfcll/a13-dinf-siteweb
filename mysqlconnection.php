<?php
$link = mysql_connect("localhost", "equipe5", "equipe5abc")
or die("Impossible de se connecter : " . mysql_error());
//echo 'Connexion réussie';

$db_selected = mysql_select_db('a13equipe5', $link);
if (!$db_selected) {
    die ('Impossible de sélectionner la base de données : ' . mysql_error());
}

//mysql_close($link);
?>
