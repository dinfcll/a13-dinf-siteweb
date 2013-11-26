<?php
    include("mysqlconnection.php");

    $id = $_POST["ID"];
    $Date = htmlspecialchars($_POST["Date"]);
    $donnee = htmlspecialchars($_POST["Donnee"]);
    $datemodif = date("Y-m-d H:i:s");
    $table = $_GET["table"];

    $requete = "UPDATE $Date SET Donnee=\"".$donnee."\", Date=\"".$Date."\", DateModif=\"".$datemodif."\" WHERE ID=".$id;
    mysql_query($requete);
    echo 'Modification en cour...';
    header("Location: indexadmin.php");
?>