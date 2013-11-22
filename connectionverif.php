<?php
    if($_REQUEST["nom2"]=="admin" && $_REQUEST["pass"]=="admin123")
    {
        session_start();
        $_SESSION["Nom"]="Salut";
        header("Location: indexadmin.php");
    }
    else
    {
        header("Location: connection.php?Erreur=1");
    }
?>