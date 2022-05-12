<?php
session_start();
require 'connect.php';
require 'connection.php';
$sql_host = "10.11.128.204";
$sql_dbnm = "Att2012";
$sql_user = "porta";
$sql_pswd = "porta1";

try {
	$conn = new PDO("sqlsrv:Server=$sql_host,1433;Database=$sql_dbnm", "$sql_user", "$sql_pswd");		
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}

catch(Exception $e){
	die( print_r( $e->getMessage() ) );
}

$tsql = "SELECT * FROM Userinfo";
$getResults = $conn->prepare($tsql);
$getResults->execute();

$results = $getResults->fetchAll(PDO::FETCH_BOTH);

foreach($results as $row){
    if(empty($row['CardNum']) || $row['CardNum'] == NULL || $row['CardNum'] == '0'){
        continue;
    }
    else{
    $card = $row['CardNum'];
    }
    if(strlen($card) == 9){
        $card = sprintf("%010d", $card);
    }
    
    $dechex1 = str_pad(dechex($card), 8, "0", STR_PAD_LEFT);
    $dechex = strval($dechex1);
    $originalString = $dechex;
    $arrayWith2CharsPerElement = str_split($originalString, 2);
    $arrayWithReversedKeys = array_reverse($arrayWith2CharsPerElement);
    $newStringInReverseOrder = implode($arrayWithReversedKeys);
    $broj_kartice = hexdec($newStringInReverseOrder);
    
    $ime_prezime = $row['Name'];
    $slika = "assets/users/".$row['UserPicture'];
    $jmbg = $row['Duty'];
    
    

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (broj_kartice,ime_prezime,JMBG,image) values (?, ?, ?, ?) ON DUPLICATE KEY UPDATE ime_prezime = '$ime_prezime', JMBG = '$jmbg', broj_kartice = '$broj_kartice'";
    $q = $pdo->prepare($sql);
    $q->execute(array($broj_kartice,$ime_prezime,$jmbg,$slika));
    Database::disconnect();
    header("Location: index.php");   
}
$_SESSION['status'] = '<div class="alert alert-success">' ."Uspešno ste ažurirali bazu podataka!" . '</div';