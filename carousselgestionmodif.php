<?php
include("mysqlconnection.php");
include("headeradmin.php");

if($_GET["action"] == "modif")
{
    $sql = "SELECT ID, Titre, Donnee from CarousselGestion where ID=".$_GET["ID"];
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
    $sql1 = "update CarousselGestion set ID='".$ID."', Titre='".$Titre."', Donnee='".$Donnee."'";
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
        header("Location: carousselmodif.php");
    }
}

if(isset($_POST['Insert'])){

    $ID = addslashes($_POST['ID']);
    $Titre = addslashes($_POST['Titre']);
    $Donnee = addslashes($_POST['Donnee']);

    if ($_POST['idp'] != "vide"){
        $sql1 = "insert into CarousselGestion (`ID`, `Titre`, `Donnee`) values ('".$ID."', '".$Titre."', '".$Donnee."')";
    }
    else{
        $sql1 = "insert into CarousselGestion (`ID`, `Titre`, `Donnee`) values ('".$ID."', '".$Titre."', '".$Donnee."')";
    }
    $result1 = mysql_query($sql1);

    if (!$result1) {
        die('Requête invalide : ' .$sql1." ".mysql_error());
        echo("echec");
    }
    else{
        $result1 = mysql_query("commit");
        header("Location: carousselmodif.php");
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Liste des sections</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script language="javascript">
        function visualisation(path)
        {
            document.getElementById("image").innerHTML = "<img src=Images/"+path+" width=100% height=100%>";
        }
    </script>
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

            <form method="post" action="update.php?table=CarousselGestion">
                <table border='0' CELLSPACING=0>
                    <?php
                    $ID="";
                    $Titre="";
                    $Donnee="";
                    $idp ="";

                    $dirname = 'Images/';
                    $dir = opendir($dirname);

                    echo 'Choisir l\'image à changer <br><br>';
                    echo '<select name="Donnee" onchange="visualisation(this.value)">';
                    while (($file = readdir($dir)))
                    {
                        echo $file;

                        if ($file != "." && $file != "..")
                        {
                            echo '<option value="'.$file.'">'.$file.'</option>';
                        }

                    }
                    echo '</select>';

                    closedir($dir);
                    ?>

                </table>

                <br/>
                <?php  if(isset($_GET["ID"] ) and $_GET["ID"] != NULL){?>
                    <input type="hidden" name="ID" value="<?php echo $_GET["ID"] ?>">
                    <input type="submit" name="Modifier" value="Mettre à jour"/>
                <?php  }
                else{?>
                    <input type="submit" name="Insert" value="Insérer"/>
                <?php  }?>



        </div>

        <div class="section_w260 float_l">
            <div id="image"><img src="Images/reseau3.JPG" width=100% height=100%></div>
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
