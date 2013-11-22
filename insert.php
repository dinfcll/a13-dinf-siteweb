<?php
    include("mysqlconnection.php");

    $id = $_POST["ID"];
    $titre = $_POST["Titre"];
    $donnee = htmlspecialchars($_POST["Donnee"]);
    $datemodif = date("Y-m-d H:i:s");
    $table = $_GET["table"];

    $requete = "Insert Into $table(ID, Titre, Donnee, DateModif) VALUES('', '$titre', '$donnee', '$datemodif')";
    mysql_query($requete);
    echo 'Modification en cour...';
    header("Location: indexadmin.php");
?>