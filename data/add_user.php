<?php 
include('connection.php');
$ime_prezime= $_POST['ime_prezime'];
$broj_kartice = $_POST['broj_kartice'];
$datum = $_POST['datum'];
$vrsta_obroka = $_POST['vrsta_obroka']; 
$vrsta_bona = $_POST['vrsta_bona'];
$ime_jela = $_POST['ime_jela'];

$chk1 = "";
foreach ($ime_jela as $chk){
    $chk1 = $chk;
}

$sql = "INSERT INTO `kantina_statistika` (`ime_prezime`,`broj_kartice`,`datum`,`vrsta_obroka`,`vrsta_bona`,`ime_jela`) values ('$ime_prezime', '$broj_kartice', '$datum', '$vrsta_obroka', '$vrsta_bona','$chk1')";
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