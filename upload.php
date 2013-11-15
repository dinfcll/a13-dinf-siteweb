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
                    </ul>

                    <div class="cleaner_h20"></div>
                </div>

                <div class="section_w260 float_l margin_r60">

                    <form method="POST" action="upload2.php" enctype="multipart/form-data">
                        <!-- On limite le fichier à 100Ko -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                        Fichier : <input type="file" name="avatar"></br></br>
                        <input type="submit" name="envoyer" value="Envoyer le fichier">
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