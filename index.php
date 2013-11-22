<html xmlns="http://www.w3.org/1999/html">
    <head>

        <?php
        include('header.php');
        ?>

        <link href="css/glDatePicker.default.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="templatemo_content">

            <div class="section_w900">

                <div class="section_w260 float_l margin_r60">
                    <h2 style="text-align: center;">Réseaux</h2>
                    <iframe src="carouselReseaux.php" frameborder="0" scrolling="no"></iframe>
                    <div class="button_01"><a
                            href="http://cll.qc.ca/programmes/techniques/techniques-de-linformatique-gestion-de-reseaux-informatiques-420-ac/">Plus</a>
                    </div>
                    <div class="cleaner_h20"></div>

                </div>

                <div class="section_w260 float_l margin_r60">

                    <h2 style="text-align: center;">Gestion</h2>
                    <iframe src="carouselGestion.php" frameborder="0" scrolling="no"></iframe>

                    <div class="button_01"><a
                            href="http://cll.qc.ca/programmes/techniques/techniques-de-linformatique-informatique-de-gestion-420-aa/">Plus</a>
                    </div>

                </div>

                <div class="section_w260 float_l">

                    <h2 style="text-align: center;">Industrielle</h2>
                    <iframe src="carouselIndu.php" frameborder="0" scrolling="no"></iframe>

                    <div class="button_01"><a
                            href="http://cll.qc.ca/programmes/techniques/techniques-de-linformatique-informatique-industrielle-420-ab/">Plus</a>
                    </div>

                </div>

                <div class="cleaner"></div>

            </div>

            <div class="cleaner_h30 divider"></div>
            <div class="cleaner_h30"></div>

            <div class="section_w900">

                <div class="section_w260 float_l margin_r60">

                    <h2>Évenements</h2>
                    <?php
                        include('calendrier.php');
                    ?>


                    <div class="cleaner_h10"></div>

                </div>

                <div class="section_w580 float_r">

                    <h2>Dernières Nouvelles</h2>

                    <?php
                        $sql = "SELECT * FROM Nouvelles ORDER BY DateModif DESC";
                        $result = mysql_query($sql);

                        if (!$result) {
                            echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysql_error();
                            exit;
                        }

                        for ($i = 1; $i <= 5; $i++)
                        {
                            $row = mysql_fetch_assoc($result);

                            echo '<h3>'.$row["Titre"].'</h3>';
                            echo $row["Donnee"];
                            echo '<br>';
                            echo '<p>Ajouté le : '.$row["DateModif"].'</p>';
                            echo '<br>';
                        }
                    ?>

                </div>

                <div class="cleaner"></div>
            </div>

        </div>

        <?php
            include('footer.php');
        ?>

    </body>
</html>