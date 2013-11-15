<?php
    include("mysqlconnection.php");

    $id = $_POST["ID"];
    $donnee = $_POST["Donnee"];
    $table = $_GET["table"];

    $requete = "UPDATE $table SET Donnee=\"".$donnee."\" WHERE ID=".$id;

    mysql_query($requete);
    echo 'Modification en cour...';
    header("Location: headermodif.php");
?>
