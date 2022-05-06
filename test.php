<?php
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
    if(empty($row['CardNum']) || $row['CardNum'] == NULL){
    $card = 77777777777;
    }else{
    $card = $row['CardNum'];
    }
    $dechex1 = dechex($card);
    $dechex = strval($dechex1);
    $originalString = $dechex;
    $arrayWith2CharsPerElement = str_split($originalString, 2);
    $arrayWithReversedKeys = array_reverse($arrayWith2CharsPerElement);
    $newStringInReverseOrder = implode($arrayWithReversedKeys);
    $broj_kartice = hexdec($newStringInReverseOrder);
    
    $ime_prezime = $row['Name'];
    $slika = "assets/users/".$row['UserPicture'];
    


    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (broj_kartice,ime_prezime,image) values (?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($broj_kartice,$ime_prezime,$slika));
    Database::disconnect();
    header("Location: index.php");   
}