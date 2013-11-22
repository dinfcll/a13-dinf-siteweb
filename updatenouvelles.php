<?php
    include("mysqlconnection.php");

    $id = $_POST["ID"];
    $titre = htmlspecialchars($_POST["Titre"]);
    $donnee = htmlspecialchars($_POST["Donnee"]);
    $datemodif = date("Y-m-d H:i:s");
    $table = $_GET["table"];

    $requete = "UPDATE $table SET Donnee=\"".$donnee."\", Titre=\"".$titre."\", DateModif=\"".$datemodif."\" WHERE ID=".$id;
    mysql_query($requete);
    echo 'Modification en cour...';
    header("Location: indexadmin.php");
?>