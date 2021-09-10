<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

require 'connect.php';

$danasnji_datum = date("d-m-Y");
$obrok = "topli obrok";

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$soma = $pdo->query("SELECT COUNT(ID) FROM kantina_statistika WHERE `datum` = CURDATE() 
GROUP BY `datum` ")->fetchColumn();


$soma1 = $pdo->query("SELECT COUNT(ID) AS total2 FROM kantina_statistika WHERE vrsta_obroka ='topli obrok' AND `datum` BETWEEN CURDATE() AND CURDATE() 
GROUP BY `datum`   ")->fetchColumn();


$soma2 = $pdo->query("SELECT COUNT(ID) AS total2 FROM kantina_statistika WHERE vrsta_obroka ='hladan obrok' AND `datum` BETWEEN CURDATE() AND CURDATE() 
GROUP BY `datum`   ")->fetchColumn();


?>
<body>
    <h4> Broj danasnjih prodatih obroka : <?php echo $soma ?> </h4> 
    <h4> Broj danasnjih toplih obroka : <?php echo $soma1 ?> </h4> 
    <h4> Broj danasnjih hladnih obroka : <?php echo $soma2 ?> </h4> 
</body>
</html>
