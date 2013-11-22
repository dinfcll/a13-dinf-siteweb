<?php
    include("mysqlconnection.php");
    include("headeradmin.php");

    if($_GET["action"] == "modif")
    {
        $sql = "SELECT ID, Titre, Donnee, DateModif from Nouvelles where ID=".$_GET["ID"];
        $result = mysql_query($sql);

        if (!$result) {
            echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysql_error();
            exit;
        }
    }

    if(isset($_POST['Modifier'])){
        $ID = addslashes($_POST['ID']);
        $Titre = addslashes($_POST['Titre']);
        $Donnee = addslashes($_POST['Donnee']);
        $DateModif = addslashes($_POST['DateModif']);
        $sql1 = "update Nouvelles set ID='".$ID."', Titre='".$Titre."', Donnee='".$Donnee."', DateModif='".$DadeModif."'";
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
            header("Location: nouvellesmodif.php");
        }
    }

    if(isset($_POST['Insert'])){

        $ID = addslashes($_POST['ID']);
        $Titre = addslashes($_POST['Titre']);
        $Donnee = addslashes($_POST['Donnee']);
        $DateModif = addslashes($_POST['DateModif']);

        if ($_POST['idp'] != "vide"){
            $sql1 = "insert into Nouvelles (`ID`, `Titre`, `Donnee`, `DateModif`) values ('".$ID."', '".$Titre."', '".$Donnee."', '".$DateModif."')";
        }
        else{
            $sql1 = "insert into Nouvelles (`ID`, `Titre`, `Donnee`, `DateModif`) values ('".$ID."', '".$Titre."', '".$Donnee."', '".$DateModif."')";
        }
        $result1 = mysql_query($sql1);

        if (!$result1) {
            die('Requête invalide : ' .$sql1." ".mysql_error());
            echo("echec");
        }
        else{
            $result1 = mysql_query("commit");
            header("Location: nouvellesmodif.php");
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
                        <li><a href="headermodif.php" class="current"><span></span>Modifier Titre</a></li>
                        <li><a href="header2modif.php" class="current"><span></span>Modifier Titre admin</a></li>
                        <li><a href="footermodif.php" class="current"><span></span>Modifier Pied de page</a></li>
                        <li><a href="indexmodif.php" class="current"><span></span>Modifier Accueil</a></li>
                        <li><a href="enseignantmodif.php" class="current"><span></span>Modifier Page enseignant</a></li>
                        <li><a href="photovideomodif.php" class="current"><span></span>Modifier photovideo.php</a></li>
                        <li><a href="upload.php" class="current"><span></span>Upload</a></li>
                        <li><a href="nouvellesmodif.php" class="current"><span></span>Ajouter/Modifier une nouvelle</a></li>
                        <li><a href="carousselmodif.php" class="current"><span></span>Modifier les caroussels</a></li>
                    </ul>

                    <div class="cleaner_h20"></div>
                </div>

                <div class="section_w260 float_l margin_r60">
                    <?php  if(isset($_GET["ID"] ) and $_GET["ID"] != NULL){?>
                        <form method="post" action="updatenouvelles.php?table=Nouvelles">
                    <?php  }
                     else{?>
                            <form method="post" action="insert.php?table=Nouvelles">
                     <?php  }?>

                        <table border='0' CELLSPACING=0>
                            <?php
                                $ID="";
                                $Titre="";
                                $Donnee="";
                                $DateModif="";
                                $idp ="";

                                if($_GET["action"] == "modif")
                                {
                                    if($row = mysql_fetch_assoc($result)){
                                        $ID=$row["ID"];
                                        $Titre=stripcslashes($row["Titre"]);
                                        $Donnee=stripcslashes($row["Donnee"]);
                                        $DateModif=stripcslashes($row["DateModif"]);
                                        $idp = $row["id_parent"];
                                    }
                                }
                            ?>
                            <tr>
                                <td>ID</td>
                                <td>
                                    <input type="text" name="ID" size="20" id="ID" value="<?php echo $ID;?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Titre</td>
                                <td>
                                    <input type="text" name="Titre" size="20" id="Titre" value="<?php echo $Titre;?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Donnée</td>
                                <td>
                                    <textarea rows="4" cols="50" class="ckeditor" name="Donnee" id="Donnee"><?php echo htmlspecialchars_decode($Donnee);?></textarea>
                                    <!--<input type="text" name="repas" size="20" id="repas" value="<?php echo $Titre;?>"/>-->
                                </td>
                            </tr>

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
