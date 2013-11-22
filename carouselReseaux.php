<html>
    <head>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/easySlider1.7.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#slider").easySlider({
                    auto:true,
                    continuous: true
                });
            });
        </script>
        <?php include("fonctions.php"); ?>

        <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
    </head>

    <body style="background-color: #080707;position:absolute;left:-200px">
        <div id="slider">
            <ul>
                <li><img src="Images/<?php echo recupererContenu('CarousselReseau', 1); ?>" alt="img" width="200px" height="200px"/></li>
                <li><img src="Images/<?php echo recupererContenu('CarousselReseau', 2); ?>" alt="img" width="200px" height="200px"/></li>
                <li><img src="Images/<?php echo recupererContenu('CarousselReseau', 3); ?>" alt="img" width="200px" height="200px"/></li>
            </ul>
        </div>

    </body>
</html>