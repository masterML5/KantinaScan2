<?php

require 'connection.php';



function getUserInfo(){
    global $dbo;



    $res=array();
    $sql_bin2 = odbc_prepare($dbo, 'SELECT * FROM Userinfo ORDER BY Name ASC');

    odbc_execute($sql_bin2, array(''));

    if ($sql_bin2) {

        while($row=odbc_fetch_array($sql_bin2)){
           $res[]=$row;
        }
    }
    var_dump($row);

    return $res;
}





?>