<?php
include("mysqlconnection.php");

if ($_GET["action"] == "modif") {
    $sql = "SELECT ID, Titre, Donnee from Header where ID=" . $_GET["ID"];
    $result = mysql_query($sql);

    if (!$result) {
        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysql_error();
        exit;
    }
}

if (isset($_POST['Modifier'])) {
    $ID = addslashes($_POST['ID']);
    $Titre = addslashes($_POST['Titre']);
    $Donnee = addslashes($_POST['Donnee']);
    $sql1 = "update Header set ID='" . $ID . "', Titre='" . $Titre . "', Donnee='" . $Donnee . "',";
    if ($_POST['idp'] != "vide") {
        $sql1 = $sql1 . ", id_parent=" . $_POST['idp'];
    }

    $sql1 = $sql1 . " where ID=" . $_POST['ID'];

    $result1 = mysql_query($sql1);
    index;

    if (!$result1) {
        die('Requête invalide : ' . $sql1 . " " . mysql_error());
        echo("echec");
    } else {
        $result1 = mysql_query("commit");
        header("Location: indexmodif.php");
    }
}

if (isset($_POST['Insert'])) {

    $ID = addslashes($_POST['ID']);
    $Titre = addslashes($_POST['Titre']);
    $Donnee = addslashes($_POST['Donnee']);

    if ($_POST['idp'] != "vide") {
        $sql1 = "insert into Header (`ID`, `Titre`, `Donnee`) values ('" . $ID . "', '" . $Titre . "', '" . $Donnee . "')";
    } else {
        $sql1 = "insert into Header (`ID`, `Titre`, `Donnee`) values ('" . $ID . "', '" . $Titre . "', '" . $Donnee . "')";
    }
    $result1 = mysql_query($sql1);

    if (!$result1) {
        die('Requête invalide : ' . $sql1 . " " . mysql_error());
        echo("echec");
    } else {
        $result1 = mysql_query("commit");
        header("Location: indexmodif.php");
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

                    <form method="post" action="update.php?table=<?php echo $_GET["table"] ?>">
                        <table border='0' CELLSPACING=0>
                            <?php
                            $ID = "";
                            $Titre = "";
                            $Donnee = "";
                            $idp = "";

                            if ($_GET["action"] == "modif") {
                                if ($row = mysql_fetch_assoc($result)) {
                                    $ID = $row["ID"];
                                    $Titre = stripcslashes($row["Titre"]);
                                    $Donnee = stripcslashes($row["Donnee"]);
                                    $idp = $row["id_parent"];
                                }
                            }
                            ?>
                            <tr>
                                <td>ID</td>
                                <td>
                                    <input type="text" name="ID" size="20" id="ID" value="<?php echo $ID; ?>" readonly/>
                                </td>
                            </tr>
                            <tr>
                                <td>ID parent</td>
                                <td>
                                    <?php
                                    $sql = "SELECT ID, Titre,Donnee from " . $_GET["table"];
                                    $result = mysql_query($sql);

                                    if (!$result) {
                                        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysql_error();
                                        exit;
                                    }
                                    ?>



                                    <select name="idp" size="1">
                                        <option value="vide"></option>
                                        <?php
                                        while ($row = mysql_fetch_assoc($result)) {
                                            ?>
                                            <option
                                                value="<?php echo $row['ID'] ?>" <?php if ($row['ID'] == $idp) echo 'selected' ?>><?php echo $row['ID'] . " - " . $row['Titre'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Donnée</td>
                                <td>
                                    <textarea rows="4" cols="50" class="ckeditor" name="Donnee"
                                              id="Donnee"><?php echo $Donnee; ?></textarea>
                                    <!--<input type="text" name="repas" size="20" id="repas" value="<?php echo $Titre;?>"/>-->
                                </td>
                            </tr>

                        </table>

                        <br/>
                        <?php if (isset($_GET["ID"]) and $_GET["ID"] != NULL) { ?>
                            <input type="submit" name="Modifier" value="Mettre à jour"/>
                        <?php
                        } else {
                            ?>
                            <input type="submit" name="Insert" value="Insérer"/>
                        <?php } ?>
                    </form>
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


    </body>
</html>
