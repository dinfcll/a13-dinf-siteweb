<?php
    $NomEtudiant = $_REQUEST["NomEtudiant"];
    $ConcentrationProgramme = $_REQUEST["ConcentrationProgramme"];
    $AnneeProgramme = $_REQUEST["AnneeProgramme"];
    $NomActivite = $_REQUEST["NomActivite"];
    $NomProfesseur = $_REQUEST["NomProfesseur"];
    $PrecisionsAdditionnelles = $_REQUEST["PrecisionsAdditionnelles"];
?>


<html xmlns="http://www.w3.org/1999/html">
<head>
    <?php
        include('header.php');
    ?>
</head>
<div id="templatemo_content">
<?php
    $headers ='From: <'."dinf@cll.qc.ca".'>'."\n";
    $headers .='Reply-To: '."dinf@cll.qc.ca".''."\n";
    $headers .='Content-Type: text/plain; charset="utf-8"'."\n";
    $headers .='Content-Transfer-Encoding: 8bit';

    $message = "Nom de l'étudiant : ";
    $message .= $NomEtudiant;
    $message .= "<br>";
    $message .= "Concentration du programme : ";
    $message .= $ConcentrationProgramme;
    $message .= "<br>";
    $message .= "Année du programme : ";
    $message .= $AnneeProgramme;
    $message .= "<br>";
    $message .= "Nom de l'activité : ";
    $message .= $NomActivite;
    $message .= "<br>";
    $message .= "Nom du professeur : ";
    $message .= $NomProfesseur;
    $message .= "<br>";
    $message .= "Précisions additionnelles : ";
    $message .= $PrecisionsAdditionnelles;
    $message .= "<br>";

    if(mail("gosselinalexandre@hotmail.com",'Données du formulaire inscription',$message,$headers))
    {
        echo "Le formulaire a ete envoyé avec succès!";
    }
        else
        {
            echo "Une erreur est survenue dans l'envoi du formulaire. ";
        }
?>
</div>
<?php
    include('footer.php');
?>