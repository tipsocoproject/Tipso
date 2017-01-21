<?php
include("../fonction/function_uninjection_sql.php");


if(isset($_POST['confirm-button']))
{
    for ($i = 0; $i <= 10; $i++) {
        
            $serialnumber = uninjection_sql(htmlspecialchars($_POST['serialnumber'][$i]));
            echo $serialnumber;
        
  
    /*

    if(!empty($_POST['email']) AND !empty($_POST['password']))
    {
        $requser = $bdd->prepare("SELECT * FROM client WHERE mail = ? AND password = ?");
        $requser->execute(array($mail, $password));
        $userexist = $requser->rowCount();
    */
    }

}
?>

<html>
<head>
    <meta charset="utf-8" />
    <title>Rooms</title>

    <style>

    img {
        cursor: pointer;
        border-width: 1px;
        height: 50px;
        width: 50px;
        margin-left: 30px;
        margin-right: 30px; 
    }

    input {
    	margin-left: 20px;
    	margin-right: 20px;
        margin-bottom: 20px;
    	width: 300px;
    }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
</head>
<body>
    <div class="sensors-select" align="center">
        <form method="POST" action="">
            <img src="http://www.icone-png.com/png/30/29916.png" id="plus">
            <script>

            var total_room = ["Salle à manger","Salon","Entrée","Salle de bain","Cuisine","Terrasse","Bureau","Buanderie","Autres"];
            var counter = 0;

            /* When the document is charged the function begins.*/

            $(document).ready(function() {

                $('#plus').click(function() {
                    counter++;
                    $('#plus').before('<div class="image"><input type="text" name="serialnumber[]" required/><select name="selectroom[]" required/></select><input type="text" name="room[]" required/></div>');
                    for (i = 0; i < total_room.length; i++) { 
                        $('select[name$="selectroom[]"]').append($('<option>', {
                            value: i,
                            text: total_room[i]
                        }));
                    }
                });
            });

        </script>
        <input class="button" type="submit" name="confirm-button">
        </form>
    </div>
</body>
</html>