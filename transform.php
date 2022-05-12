<?php



$card = 1682796202;
$num_length = strlen((string)$card);
echo $num_length . '<br>';
if($num_length == 9){

    $card = sprintf("%010d", $card);
}

$dechex1 = str_pad(dechex($card), 8, "0", STR_PAD_LEFT);

$dechex = strval($dechex1);
$originalString = $dechex;
$arrayWith2CharsPerElement = str_split($originalString, 2);
$arrayWithReversedKeys = array_reverse($arrayWith2CharsPerElement);
$newStringInReverseOrder = implode($arrayWithReversedKeys);
$broj_kartice = hexdec($newStringInReverseOrder);

var_dump($broj_kartice);



?>