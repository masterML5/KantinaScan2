<?php
$CardNumber=$_REQUEST['CardNumber'];
$con=mysqli_connect("localhost","root","","kantina");
if($CardNumber!==""){
    $query=mysqli_query($con,"SELECT * FROM `users` WHERE broj_kartice='$CardNumber'");
    $row=mysqli_fetch_array($query);
    $image=$row["ime_prezime"];
}
$result = array("$image");
$myJSON = json_encode($result);
echo $myJSON;
?>