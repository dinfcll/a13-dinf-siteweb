<?php


function recupererContenu($table, $id) {
    include("mysqlconnection.php");
    $changement = "SELECT * from $table where ID=$id";
    $resultat = mysql_query($changement);
    $row = mysql_fetch_assoc($resultat);
    return $row["Donnee"];
}
?>
