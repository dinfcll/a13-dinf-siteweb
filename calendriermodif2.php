<?php
    include("mysqlconnection.php");
    include("headeradmin.php");

    if($_GET["action"] == "modif")
    {
        $sql = "SELECT ID, DateEvenement, Donnee, DateModif from Calendrier where ID=".$_GET["ID"];
        $result = mysql_query($sql);

        if (!$result) {
            echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysql_error();
            exit;
        }
    }

    if(isset($_POST['Modifier'])){
        $ID = addslashes($_POST['ID']);
        $DateEvenement = addslashes($_POST['DateEvenement']);
        $Donnee = addslashes($_POST['Donnee']);
        $DateModif = addslashes($_POST['DateModif']);
        $sql1 = "update Calendrier set ID='".$ID."', DateEvenement='".$DateEvenement."', Donnee='".$Donnee."', DateModif='".$DadeModif."'";
        if ($_POST['idp'] != "vide"){
            $sql1 = $sql1.", id_parent=".$_POST['idp'];
        }

        $sql1 = $sql1. " where ID=".$_POST['ID'];

        $result1 = mysql_query($sql1);index;

        if (!$result1) {
            die('Requête invalide : ' .$sql1." ".mysql_error());
            echo("echec");
        }
        else{
            $result1 = mysql_query("commit");
            header("Location: calendriermodif.php");
        }
    }

    if(isset($_POST['Insert'])){

        $ID = addslashes($_POST['ID']);
        $DateEvenement = addslashes($_POST['DateEvenement']);
        $Donnee = addslashes($_POST['Donnee']);
        $DateModif = addslashes($_POST['DateModif']);

        if ($_POST['idp'] != "vide"){
            $sql1 = "insert into Calendrier (`ID`, `DateEvenement`, `Donnee`, `DateModif`) values ('".$ID."', '".$DateEvenement."', '".$Donnee."', '".$DateModif."')";
        }
        else{
            $sql1 = "insert into Calendrier (`ID`, `DateEvenement`, `Donnee`, `DateModif`) values ('".$ID."', '".$DateEvenement."', '".$Donnee."', '".$DateModif."')";
        }
        $result1 = mysql_query($sql1);

        if (!$result1) {
            die('Requête invalide : ' .$sql1." ".mysql_error());
            echo("echec");
        }
        else{
            $result1 = mysql_query("commit");
            header("Location: calendriermodif.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Liste des sections</title>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>

        <div id="templatemo_content">

            <div id="banner_content">
                <p><img src="images/depinformatique.jpg" alt="reseau" height="300px" width="100%"/></p>
                </br></br></br></br>
            </div>

            <div class="section_w900">

                <div class="section_w260 float_l margin_r60">

                    <ul class="MenuGauche">
                        <li><a href="indexadmin.php" class="current"><span></span>Page d'accueil admin</a></li>
                        <li><a href="headermodif.php" class="current"><span></span>Modifier Titre</a></li>
                        <li><a href="header2modif.php" class="current"><span></span>Modifier Titre admin</a></li>
                        <li><a href="upload.php" class="current"><span></span>Upload</a></li>
                        <li><a href="carousselmodif.php" class="current"><span></span>Modifier les caroussels</a></li>
                        <li><a href="nouvellesmodif.php" class="current"><span></span>Ajouter/Modifier une nouvelle</a></li>
                        <li><a href="calendriermodif.php" class="current"><span></span>Modifier le calendrier</a></li>
                        <li><a href="footermodif.php" class="current"><span></span>Modifier Pied de page</a></li>
                    </ul>

                    <div class="cleaner_h20"></div>
                </div>

                <div class="section_w260 float_l margin_r60">
                    <?php  if(isset($_GET["ID"] ) and $_GET["ID"] != NULL){?>
                    <form method="post" action="updatecalendrier.php?table=Calendrier">
                        <?php  }
                        else{?>
                        <form method="post" action="insertcalendrier.php?table=Calendrier">
                            <?php  }?>

                            <table border='0' CELLSPACING=0>
                                <?php
                                $ID="";
                                $DateEvenement="";
                                $Donnee="";
                                $DateModif="";
                                $idp ="";

                                if($_GET["action"] == "modif")
                                {
                                    if($row = mysql_fetch_assoc($result)){
                                        $ID=$row["ID"];
                                        $DateEvenement=stripcslashes($row["DateEvenement"]);
                                        $Donnee=stripcslashes($row["Donnee"]);
                                        $DateModif=stripcslashes($row["DateModif"]);
                                        $idp = $row["id_parent"];
                                    }
                                }
                                ?>
                                <tr>
                                    <td>ID</td>
                                    <td>
                                        <input type="text" name="ID" size="20" id="ID" value="<?php echo $ID;?>" readonly="readonly"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>
                                        <input type="text" name="DateEvenement" size="20" id="DateEvenement" value="<?php echo $DateEvenement;?>"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Donnée</td>
                                    <td>
                                        <textarea rows="4" cols="50" class="ckeditor" name="Donnee" id="Donnee"><?php echo htmlspecialchars_decode($Donnee);?></textarea>
                                        <!--<input type="text" name="repas" size="20" id="repas" value="<?php echo $Titre;?>"/>-->
                                    </td>
                                </tr>

                                <p>Format de la date: AAAA, MM, JJ</p>
                                <p>Précision: Mettre un mois de moin pour avoir le bon mois. (ex. Décembre (12) = 11)</p>
                                <br><br>

                            </table>

                            <br/>
                            <?php  if(isset($_GET["ID"] ) and $_GET["ID"] != NULL){?>
                                <input type="submit" name="Modifier" value="Mettre à jour"/>
                            <?php  }
                            else{?>
                                <input type="submit" name="Insert" value="Insérer"/>
                            <?php  }?>

                </div>

                <div class="section_w260 float_l">

                </div>

                <div class="cleaner"></div>

            </div>

            <div class="cleaner_h30 divider"></div>
            <div class="cleaner_h30"></div>

            <div class="section_w900">
                <div class="cleaner"></div>
            </div>

        </div>


        <?php
        include('footer.php');
        ?>

        </form>
    </body>
</html>
