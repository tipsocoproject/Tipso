

var total_room = ["Salle à manger","Salon","Entrée","Salle de bain","Cuisine","Terrasse","Bureau","Buanderie","Autres"];
var counter = 0;


/* When the document is charged the function begins.*/

$(document).ready(function() {

    $('#plus').click(function() {
        counter++;
        $('#plus').before('<div class="image"><input type="text" name="serialnumber'+ counter +'" required/><select name="selectroom'+ counter +'" required/></select><input type="text" name="room'+counter+'" required/></div>');
    	for (i = 0; i < total_room.length; i++) { 
    		$('select[name$="selectroom' + counter + '"]').append($('<option>', {
        		value: i,
        		text: total_room[i]
 			}));
		}
    });
});

