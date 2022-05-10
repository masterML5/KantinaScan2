<?php 
include('connection.php');
$ime_prezime= $_POST['ime_prezime'];
$broj_kartice = $_POST['broj_kartice'];
$datum = $_POST['datum'];
$vrsta_obroka = $_POST['vrsta_obroka']; 
$vrsta_bona = $_POST['vrsta_bona'];
$ime_jela = $_POST['ime_jela'];

$chk1 = "";

$sqlcheck = "SELECT * FROM kantina_statistika WHERE ime_prezime like '$ime_prezime' AND broj_kartice like $broj_kartice AND CURRENT_TIMESTAMP < vreme_obroka + INTERVAL 12 HOUR";
	
	$query = mysqli_query($con, $sqlcheck);
	$fetch_data = mysqli_fetch_assoc($query);
	@$vreme_obroka = $fetch_data['vreme_obroka'];

if(mysqli_num_rows($query) < 1 || $fetch_data['ime_prezime'] == 'Joker'){

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
}
else{
    $data = array(
        'status'=>'already_recorded',
      
    );
    echo json_encode($data);
}
?>