<html>
<head>

    <?php
    include('headeradmin.php');
    include('mysqlconnection.php')
    ?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Liste des sections</title>

    <script language="javascript">
        function ConfSup(id){

            if (confirm("Voulez-vous vraiment supprimer cet enregistrement?")){
                document.getElementById("Modif").value = ID;
                return true;
            }
            else{
                return false;
            }
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

            <form method="post">
                <table border='1' CELLSPACING=0>
                    <tr bgcolor="#99CCFF">
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Données</th>
                        <th>Supprimer/Modifier</th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM Header";
                    $result = mysql_query($sql);

                    if (!$result) {
                        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysql_error();
                        exit;
                    }

                    while($row = mysql_fetch_assoc($result))
                    {
                        ?>

                        <tr >
                            <td>
                                <?php echo $row["ID"];?>
                            </td>
                            <td width=>
                                <?php echo $row["Titre"];?>
                            </td>
                            <td>
                                <?php echo $row["Donnee"];?>
                            </td>
                            <td  align="center">
                                <input type="submit" name="Supprimer" value="Supprimer" onclick="return ConfSup(<?php echo $row['ID']?>)"/>
                                <?php $lien = "headermodif2.php?action=modif&ID=".$row["ID"]."&table=Header"?>
                                <input type="button" name="Modifier" value="Modifier" onclick="self.location.href='<?php echo $lien?>'"/>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>

                </table>
                <input type="hidden" name="Modif" value="0" id="Modif"/>
                <br/>
                <input type="button" name="Ajouter" value="Ajouter une section" onclick="self.location.href='headermodif2.php?action=ajout'"/>
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
