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
                        date: new Date(2013, 9, 16),
                        data: { message: 'cosum a 21h' },
                    },
                    {
                        date: new Date(2013, 9, 23),
                        data: { message: 'Happy New Year!' },
                    }
                ],
                onClick: function(target, cell, date, data) {
                    target.val(date.getFullYear() + ' - ' +
                        date.getMonth() + ' - ' +
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

