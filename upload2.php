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

                    <?php
                        $dossier = 'Images/';
                        $fichier = basename($_FILES['avatar']['name']);
                        $taille_maxi = 2000000;
                        $taille = filesize($_FILES['avatar']['tmp_name']);
                        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
                        $extension = strrchr($_FILES['avatar']['name'], '.');

                        //Début des vérifications de sécurité...
                        if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                        {
                            $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
                        }

                        if ($taille > $taille_maxi) {
                            $erreur = 'Le fichier est trop gros...';
                        }

                        if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
                        {
                            //On formate le nom du fichier ici...
                            $fichier = strtr($fichier,
                                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

                            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                            {
                                echo 'Upload effectu&eacute; avec succ&egrave;s !';
                            } else //Sinon (la fonction renvoie FALSE).
                            {
                                echo 'Echec de l\'upload !';
                            }
                        } else {
                            echo $erreur;
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