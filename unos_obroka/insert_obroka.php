<?php 

require '../connect.php';

session_start();
   		
   
 
    if (isset($_POST['obrok_hladan']) || isset($_POST['obrok_topli'])) {
        // keep track post values
		$con  = mysqli_connect('localhost','root','','kantina');
		$datum = $_POST['datum'];
        @$obrok_hladan = $_POST['obrok_hladan']; 
        @$obrok_topli = $_POST['obrok_topli'];
		
		
		
		$chk7="";  
		global $error;
		
		if($obrok_hladan != NULL){
		
		foreach($obrok_hladan as $chk1)  
   		{  
			$error = array();
      		$chk7 = $chk1; 
		$checksql = "SELECT * FROM vrsta_jela WHERE ime_jela = '$chk7' AND datum = '$datum' ";
		$query_run = mysqli_query($con, $checksql);
		
		if(mysqli_num_rows($query_run) > 0){
			$error['ime_jela'] = 'vec postoji' .$chk7. 'za ovaj datum';
		}
		
		}
		}
		if($obrok_topli != NULL){
		foreach($obrok_topli as $chk1)  
   		{  
			$error = array();
      		$chk8 = $chk1; 
		$checksql = "SELECT * FROM vrsta_jela WHERE ime_jela = '$chk8' AND datum = '$datum' ";
		$query_run = mysqli_query($con, $checksql);
		
		if(mysqli_num_rows($query_run) > 0){
			$error['ime_jela'] = 'vec postoji' .$chk8. 'za ovaj datum';
		}
		
		}	
		
	}

		if(count($error) === 0 || $error === NULL){
			



		if($obrok_topli === NULL && !empty($obrok_hladan)){
            
        
		// insert data
		$chk="";  
		foreach($obrok_hladan as $chk1)  
   		{  
      		$chk = $chk1;  
            $vrsta_jela = 'hladan'; 
            $slika = "assets/images/$chk.jpg";
  		  
		
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO vrsta_jela (datum,ime_jela, tip_jela,slika) values (?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($datum, $chk, $vrsta_jela, $slika));
		Database::disconnect();
		$_SESSION['status'] =  '<div class="alert alert-success">' ."Uspesno ste uneli jela!" . '</div';
		header("Location: unos_obroka.php");
           }

        }
        else if($obrok_hladan === NULL && !empty($obrok_topli)){
              
        $chk1="";  
		foreach($obrok_topli as $chk1)  
   		{  
      		$chk = $chk1;  
            $vrsta_jela = 'topli'; 
            $slika2 = "assets/images/$chk.jpg";
  		  

        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO vrsta_jela (datum,ime_jela, tip_jela,slika) values (?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($datum, $chk1, $vrsta_jela, $slika2));
		Database::disconnect();
		$_SESSION['status'] =  '<div class="alert alert-success">' ."Uspesno ste uneli jela!" . '</div';
		header("Location: unos_obroka.php");
           }
        }
        else{
            $chk="";  
		foreach($obrok_hladan as $chk1)  
   		{  
      		$chk = $chk1;  
            $vrsta_jela = 'hladan'; 
            $slika = "assets/images/$chk.jpg";
  		  

        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO vrsta_jela (datum,ime_jela, tip_jela,slika) values (?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($datum, $chk, $vrsta_jela, $slika));
		Database::disconnect();
		$_SESSION['status'] =  '<div class="alert alert-success">' ."Uspesno ste uneli jela!" . '</div';
		header("Location: unos_obroka.php");
           }
           
        $chk3="";  
		foreach($obrok_topli as $chk2)  
   		{  
      		$chk3 = $chk2;  
            $vrsta_jela1 = 'topli'; 
            $slika2 = "assets/images/$chk3.jpg";
  		  

        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO vrsta_jela (datum,ime_jela, tip_jela,slika) values (?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($datum, $chk2, $vrsta_jela1, $slika2));
		Database::disconnect();
		$_SESSION['status'] = '<div class="alert alert-success">' ."Uspesno ste uneli jela!" . '</div';
		header("Location: unos_obroka.php");
           }

        }
    }
	else{
		$checksql2 = "SELECT ime_jela FROM vrsta_jela WHERE datum = '$datum' ";
			$query_run = mysqli_query($con, $checksql2);
			$poruka2 = "Uneli ste jelo koje vec postoji na meniju za danas, jela na meniju su : <br>";
			$poruka="";
			
			 foreach($query_run as $a){
				$poruka .= implode($a) . '<br>' ;
				
			} 

		$_SESSION['status'] = '<div class="alert alert-danger">' . $poruka2 . $poruka . '</div';
		header("Location: unos_obroka.php");
		exit;
		
	}
}
else{
	header("Location: unos_obroka.php");
	$_SESSION['status'] = '<div class="alert alert-danger">' . 'Niste uneli ni jedno jelo!' . '</div';
	exit;
	
}

?>
