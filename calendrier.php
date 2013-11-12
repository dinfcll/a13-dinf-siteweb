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
                    {
                        date: new Date(2013, 10, 29),
                        data: { message: 'Présentation de notre merveilleux site web :)' },
                    },
                    {
                        date: new Date(2013, 9, 23),
                        data: { message: 'Happy New Year!' },
                    }
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


