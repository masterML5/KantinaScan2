<?php 
include('connection.php');
$ime_prezime = $_POST['ime_prezime'];
$broj_kartice = $_POST['broj_kartice'];
$datum = $_POST['datum'];
$vrsta_obroka = $_POST['vrsta_obroka'];
$id = $_POST['id'];

$sql = "UPDATE `kantina_statistika` SET  `ime_prezime`='$ime_prezime' , `broj_kartice`= '$broj_kartice', `datum`='$datum',  `vrsta_obroka`='$vrsta_obroka' WHERE id='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>