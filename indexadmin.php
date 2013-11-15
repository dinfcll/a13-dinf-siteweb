<html>
    <head>

        <?php
            include('headeradmin.php');
        ?>
        <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">

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
                    </ul>

                    <div class="cleaner_h20"></div>
                </div>

                <div class="section_w260 float_l margin_r60">

                    <?php
                        if($_REQUEST["nom2"]=="admin" && $_REQUEST["pass"]=="admin123")
                        {
                            session_start();
                            echo '<p>Session ouverte</p>';
//                            echo $_SERVER["HTTP_REFERER"];

                            $_SESSION["Nom"]="Salut";

                        }
                        else
                        {
//                            echo '<p><FONT COLOR= "#FF0000">"Erreur ,pas le droit"</FONT></p>';
                            header("Location: connection.php");
                        }
                    ?>

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
