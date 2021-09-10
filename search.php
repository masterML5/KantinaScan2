<?php
$Name=$_REQUEST['Name'];
$con=mysqli_connect("localhost","root","","kantina");
if($Name!==""){
    $query=mysqli_query($con,"SELECT * FROM `users` WHERE ime_prezime='$Name'");
    $row=mysqli_fetch_array($query);
    $card=$row["broj_kartice"];
}
$result = array("$card");
$myJSON = json_encode($result);
echo $myJSON;
?>