<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CLL Informatique</title>
    <link href="templatemo_style.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
    <meta name="viewport" content="width=device-width" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <?php
        include("fonctions.php");
    ?>

</head>
<body>

<div id="templatemo_site_title_bar_wrapper">

    <div id="templatemo_site_title_bar">

        <div id="site_title">
            <h1><a href="http://www.cll.qc.ca" target="_parent"></a></h1>

                    <h1><img src="images/bck_logo.png" alt="Site Title"/></h1>

        <p class="bar_nav4">Techniques de l'informatique</p>

        <div id="menurapide">
            <ul>
                <li><a href="#">Menu Rapide</a>
                    <ul>
                        <li><a href="<?php echo recupererContenu("Header", 6)?>" target="_new">Omnivox</a></li>
                        <li><a href="<?php echo recupererContenu("Header", 7)?>" target="_new">Messagerie</a></li>
                        <li><a href="<?php echo recupererContenu("Header", 8)?>" target="_new">Repro+</a></li>
                        <li><a href="<?php echo recupererContenu("Header", 9)?>" target="_new">Calendrier Scolaire</a></li>
                        <li><a href="<?php echo recupererContenu("Header", 10)?>" target="_new">Répertoire Du Personnel</a></li>
                        <li><a href="<?php echo recupererContenu("Header", 11)?>" target="_new">Site du Cégep</a></li>
                        <li><a href="<?php echo recupererContenu("Header", 12)?>" target="_new">Admin</a></li>
                    </ul>
                </li>

            </ul>
            </a>
         </div>

        </div>
        <!-- end of templatemo_site_title_bar -->


    </div>
    <!-- end of templatemo_site_title_bar_wrapper -->

    <div id="templatemo_banner">

        <div id="templatemo_menu">
            <ul>
                <li><a href="<?php echo recupererContenu("Header", 1)?>" class="current"><span></span>Accueil</a></li>
                <li><a href="<?php echo recupererContenu("Header", 2)?>" target="_parent"><span></span>ATE</a></li>
                <li><a href="<?php echo recupererContenu("Header", 3)?>" target="_blank"><span></span>Enseignants</a></li>
                <li><a href="<?php echo recupererContenu("Header", 4)?>" target="_parent"><span></span>Stages</a></li>
                <li><a href="<?php echo recupererContenu("Header", 5)?>"><span></span>PDEA</a></li>
            </ul>
        </div>
        <!-- end of menu -->

        <div id="banner_content">
            <p><img src="Images/reseau.jpg" alt="reseau" height="120%" width="100%"/></p>

        </div>

    </div>

</div>