<?php
session_start();
     
    require 'connect.php';
	require 'connection.php';
 
    if ( !empty($_POST)) {
        // keep track post values
		$broj_kartice = $_POST['broj_kartice'];
        $ime_prezime= $_POST['ime_prezime'];
		$datum = $_POST['datum'];
        $vrsta_obroka = $_POST['vrsta_obroka']; 
		$ime_jela = $_POST['ime_jela'];
		$vrsta_bonova = $_POST['vrsta_bona'];
		global $vreme_obroka;
		

	$sqlcheck = "SELECT * FROM kantina_statistika WHERE ime_prezime like '$ime_prezime' AND broj_kartice like $broj_kartice AND CURRENT_TIMESTAMP < vreme_obroka + INTERVAL 12 HOUR";
	
	$query = mysqli_query($con, $sqlcheck);
	$fetch_data = mysqli_fetch_assoc($query);
	@$vreme_obroka = $fetch_data['vreme_obroka'];

	
	if(mysqli_num_rows($query) < 1 || $fetch_data['ime_prezime'] == 'Joker'){
		
		
        
		// insert data
		$chk="";  
		foreach($vrsta_obroka as $chk1)  
   		{  
      		$chk .= $chk1;  
  		 }  
		$ime_jela2="";  
		   foreach($ime_jela as $chk5)  
			  {  
				 $ime_jela2 .= $chk5;  
			  }  
		
	

        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO kantina_statistika (broj_kartice,ime_prezime,datum,vrsta_obroka,ime_jela,vrsta_bona) values (?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($broj_kartice,$ime_prezime,$datum,$chk,$ime_jela2,$vrsta_bonova));
		Database::disconnect();
		header("Location: index.php");
    }
	else{
		$_SESSION['status'] = '<div class="alert alert-danger">' ."Osoba " . $ime_prezime . " je evidentirana u predhodnih 12h! <br> Jela je zadnji put u " . $vreme_obroka . " <br> Podaci nisu poslati!" . '</div';
		header("Location: index.php");
		exit;
	}
}

?>
