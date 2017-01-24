<?php 

if(isset($_SESSION['id']))
{
    $idc = $_SESSION['id'];

    if(isset($_POST['confirm-button']))
    {   
        if(isset($_POST['serialnumber']))
        {              
            $counter = count($_POST['serialnumber']);
        }
        else
        {
            $counter = 0;
        }

        if($counter != 0)
        {

            for ($i = 0; $i <= $counter-1; $i++) {

                $serialnumber = uninjection_sql(htmlspecialchars($_POST['serialnumber'][$i]));
                $selectroom = uninjection_sql(htmlspecialchars($_POST['selectroom'][$i]));
                $name = uninjection_sql(htmlspecialchars($_POST['room'][$i]));



                $reqserial = $bdd->prepare("SELECT * FROM sensors WHERE sensorserial = ?");
                $reqserial->execute(array($serialnumber));
                $serialidc = $reqserial->fetch();
                $serialexist = $reqserial->rowCount();

                $idsens = $serialidc['idsens'];


                if($serialidc['idc'] == 0)
                {
                    if($serialexist == 1)
                    {  
                        $updatesens = $bdd->prepare("UPDATE sensors SET idc = ?, mail=? WHERE  sensorserial = ?");
                        $updatesens->execute(array($idc, $_SESSION['mail'], $serialnumber));

                        $inserroom = $bdd->prepare("INSERT INTO rooms(idc, roomname, type, idsens) VALUES(?,?,?,?)");
                        $inserroom->execute(array($idc, $name, $selectroom, $idsens));
                    }
                    else
                    {
                        $error= "Ce numéro de série n'existe pas !";
                    }
                }
                else
                {
                    $error = "Objet déjà enregistré !";

                }
            }
        }
        else
        {
            $error = "Rien n'a été ajouté";
        }
    }

}
else
{
    header('Location: login.php');
}
?>