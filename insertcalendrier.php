<?php
    include("mysqlconnection.php");

    $id = $_POST["ID"];
    $DateEvenement = $_POST["DateEvenement"];
    $donnee = htmlspecialchars($_POST["Donnee"]);
    $datemodif = date("Y-m-d H:i:s");
    $table = $_GET["table"];

    $requete = "Insert Into $table(ID, DateEvenement, Donnee, DateModif) VALUES('', '$DateEvenement', '$donnee', '$datemodif')";
    mysql_query($requete);
    echo 'Modification en cour...';
    header("Location: indexadmin.php");
?>