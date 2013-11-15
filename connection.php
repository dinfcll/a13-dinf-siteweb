<html>
<head>

    <?php
    include('headeradmin.php');
    ?>

</head>
<body>
<div id="templatemo_content">

    <div id="banner_content">
        <p><img src="images/depinformatique.jpg" alt="reseau" height="300px" width="100%"/></p>
        </br></br></br></br>
    </div>

    <div class="section_w900">

        <div class="section_w260 float_l margin_r60">

            <div class="cleaner_h20"></div>
        </div>

        <div class="section_w260 float_l margin_r60">

            <?php
                echo $_SERVER["HTTP_REFERER"];
//                echo $_Get["Erreur"];
//
//                if ($_Get["Erreur"] == 1)
//                {
//                    echo 'Erreur !!!';
//                }

            ?>


            <form method="post" action="indexadmin.php">
                <p>Login :</p>
                <input type="text" name="nom2" size="30">
                <p>Mot de passe :</p>
                <input type="password" name="pass" size="30">
                </br></br>
                <input type="submit" name="Submit" value="Envoyer">
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
