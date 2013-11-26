<!DOCTYPE html>
<html>
<head>
    <link href="css/glDatePicker.darkneon.css" rel="stylesheet" type="text/css">
</head>

<body>
<input type="text" size="35" id="mydate"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/glDatePicker.min.js"></script>

<script type="text/javascript">
    $(window).load(function()
    {
        $('#mydate').glDatePicker(
            {
                showAlways: true,
                cssName: 'darkneon',
                selectedDate: null,
                specialDates: [
                    <?php
                        $i = 1;
                        $lignes = "SELECT * from Calendrier";
                        $result = mysql_query($lignes);
                        $NbLignes = mysql_num_rows($result);

                        while($i <= $NbLignes)
                        {

                    ?>
                        {
                            date: new Date(<?php echo recupererDate("Calendrier", $i) ?>),
                            data: { message: '<?php echo recupererContenu("Calendrier", $i) ?>' }
                        },
                    <?php
                            $i++;
                        }
                    ?>
                ],
                onClick: function(target, cell, date, data) {
                    var mois = date.getMonth() + 1;
                    target.val(date.getFullYear() + ' - ' +
                        mois + ' - ' +
                        date.getDate());

                    if(data != null) {
                        alert(data.message + '\n');
                    }
                }
            });
    });
</script>
</body>
</html>


