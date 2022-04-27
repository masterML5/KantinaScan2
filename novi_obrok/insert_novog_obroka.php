<?php
   require '../connect.php';
   session_start();
    
 
    if ( !empty($_POST)) {
        // keep track post values
		$naziv_obroka = $_POST['naziv_obroka'];       
        $vrsta_obroka = $_POST['vrsta_obroka']; 
        $target_dir = "../assets/images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);        
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
		
        
		$con  = mysqli_connect('localhost','root','','kantina');
        $checksql = "SELECT * FROM obroci WHERE ime_obroka = '$naziv_obroka'";
		$query_run = mysqli_query($con, $checksql);
		
		if(mysqli_num_rows($query_run) > 0){
            header("Location: novi_obrok.php");
			$_SESSION['status'] = '<div class="alert alert-danger">' .'Obrok pod nazivom ' .$naziv_obroka. ' vec postoji' . '</div';
            
            exit;
		}
        // Check if image file is a actual image or fake image
        // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        // if($check !== false) {
        //   $uploadOk = 1;
        //   header("Location: novi_obrok.php");
        //   $_SESSION['status'] = '<div class="alert alert-danger">' . "File is not an image." . '</div';
        //   exit;
        // } else {
        //     $uploadOk = 0;
        // }
        // Check if file already exists
        if (file_exists($target_file)) {
            header("Location: novi_obrok.php");
		    $_SESSION['status'] = '<div class="alert alert-danger">' . "Sorry, file already exists." . '</div';
            exit; 
            
            $uploadOk = 0;
        }   
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            header("Location: novi_obrok.php");
		    $_SESSION['status'] = '<div class="alert alert-danger">' . "Sorry, your file is too large." . '</div';
            exit; 
           
            $uploadOk = 0;           
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            header("Location: novi_obrok.php");
            $_SESSION['status'] = '<div class="alert alert-danger">' . "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . '</div';
            exit;  
            
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            header("Location: novi_obrok.php");
            $_SESSION['status'] = '<div class="alert alert-danger">' . "Sorry, your file was not uploaded." . '</div';
            exit;
                    
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               
       
         
         $slika = substr($target_file, 3);
          
		// insert data

		
	

        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO obroci (vrsta_obroka,ime_obroka,slika_obroka) values (?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($vrsta_obroka, $naziv_obroka, $slika));
		Database::disconnect();
        $_SESSION['status'] = '<div class="alert alert-success">' ."Uspesno ste uneli novi obrok!" . '</div';
		header("Location: novi_obrok.php");
    }
} 
               

}
?>


