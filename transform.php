<?php



$card = 240285924;
$dechex1 = dechex($card);
$dechex = strval($dechex1);
$originalString = $dechex;
$arrayWith2CharsPerElement = str_split($originalString, 2);
$arrayWithReversedKeys = array_reverse($arrayWith2CharsPerElement);
$newStringInReverseOrder = implode($arrayWithReversedKeys);
$broj_kartice = hexdec($newStringInReverseOrder);

var_dump($broj_kartice);




?>