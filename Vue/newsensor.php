<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Rooms</title>

    <style>

    img {
        cursor: pointer;
        border-style: solid;
        border-width: 1px;
        height: 50px;
        width: 50px;
        margin-left: 30px;
        margin-right: 30px; 
    }


    input {
    	margin-left: 20px;
    	margin-right: 20px;
    	width: 300px;
    }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>

    </head>
<body>

<img src="http://www.icone-png.com/png/30/29916.png" id="plus">

<script>

var total_room = ["diningroom","livingroom","entrance","bathroom","kitchen","patio","office","laundry","other"];
var counter = 0;


/* When the document is charged the function begins.*/

$(document).ready(function() {

    $('#plus').click(function() {
        counter++;
        $('#plus').before('<div class="image"><input type="text" name="serial_num" id="o' + counter + '" required/><select name="room" id="' + counter + '" required/></select><input type="text" name="name_room" id="' + counter + '" required/></div>');
    	for (i = 0; i < total_room.length; i++) { 
    		$('select[id$="' + counter + '"]').append($('<option>', {
        		value: i,
        		text: total_room[i]
 			}));
		}
    });
});


</script>
</form>
</body>
</html>