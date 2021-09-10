<?php   
include('connection.php');

if(isset($_POST['formsubmit']))
{
    $fromdate=mysql_real_escape_string($_POST['fromdate']);
    $todate=mysql_real_escape_string($_POST['todate']);
    var_dump($fromdate);

    $sql = "SELECT kantina_statistika.vrsta_obroka, count(*) from kantina_statistika inner join report_input between '$fromdate' and '$todate' group by 2;";

    if($db->query($sql))
    {
        echo "success";
    }
    else
    {
        echo(mysql_error());
    }
}






?>