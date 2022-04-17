<?php
     
    require 'connect.php';
 
    if ( !empty($_POST)) {
        // keep track post values
		$broj_kartice = $_POST['broj_kartice'];
        $ime_prezime= $_POST['ime_prezime'];
		$datum = $_POST['datum'];
        $vrsta_obroka = $_POST['vrsta_obroka']; 
		$ime_jela = $_POST['ime_jela'];
		
        
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
		$sql = "INSERT INTO kantina_statistika (broj_kartice,ime_prezime,datum,vrsta_obroka,ime_jela) values (?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($broj_kartice,$ime_prezime,$datum,$chk,$ime_jela2));
		Database::disconnect();
		header("Location: index.php");
    }
?>
