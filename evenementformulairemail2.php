<html xmlns="http://www.w3.org/1999/html">
<head>
    <?php
        include('header.php');
    ?>
</head>
<div id="templatemo_content">
<?php
    $NomEtudiant = $_POST["NomEtudiant"];
    $ConcentrationProgramme = $_POST["ConcentrationProgramme"];
    $AnneeProgramme = $_POST["AnneeProgramme"];
    $NomActivite = $_POST["NomActivite"];
    $NomProfesseur = $_POST["NomProfesseur"];
    $PrecisionsAdditionnelles = $_POST["PrecisionsAdditionnelles"];

    $headers ='From: <'."dinf@cll.qc.ca".'>'."\n";
    $headers .='Reply-To: '."dinf@cll.qc.ca".''."\n";
    $headers .='Content-Type: text/plain; charset="utf-8"'."\n";
    $headers .='Content-Transfer-Encoding: 8bit';

    $message = "Nom de l'étudiant : ";
    $message .= $NomEtudiant;
    $message .= "\n";
    $message .= "Concentration du programme : ";
    $message .= $ConcentrationProgramme;
    $message .= "\n";
    $message .= "Année du programme : ";
    $message .= $AnneeProgramme;
    $message .= "\n";
    $message .= "Nom de l'activité : ";
    $message .= $NomActivite;
    $message .= "\n";
    $message .= "Nom du professeur : ";
    $message .= $NomProfesseur;
    $message .= "\n";
    $message .= "Précisions additionnelles : ";
    $message .= $PrecisionsAdditionnelles;
    $message .= "\n";

    if(mail("bobamers@hotmail.com",'Formulaire Site Web Info',$message,$headers))
    {
        echo "Le formulaire a été envoyé avec succès!";
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