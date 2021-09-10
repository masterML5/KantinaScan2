
<?php
$hostname='localhost';
$dbname='kantina';
$username='root';
$password='';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if(!$con){
    die ("Connection Failed" .mysqli_connect_error());
}
if(isset($_POST['formsubmit']))
{
  $fromdate=mysql_real_escape_string($_POST['fromdate']);
  $todate=mysql_real_escape_string($_POST['todate']);
  $query=mysqli_query($con,"SELECT ime_prezime FROM kantina_statistika WHERE datum BETWEEN '$fromdate' and '$todate' ORDER BY datum");
  $count=mysqli_num_rows($query);

  if($count== "0")
{
    echo '<h2>Nema podataka za taj datum</h2>';
}
else
{
    while($row = mysqli_fetch_array($query)){
        $results=$row['vrsta_obroka'];
        
        $output='<h2>'.$results.'<h2>';
        echo $output;
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="daterangereport" method="POST" action="insert_report.php">
                <fieldset id="daterangefield">
                    <legend><b>Unesite opseg datuma za pretraživanje</b></legend>
                    <div class= "group1">
                        <div class = "group2">
                            <label for="fromdate"> Od </label>
                            <br/>
                            <input type="date" name="fromdate" required/>
                        </div>
                        <div class = "group2">
                            <label for="todate"> Do </label>
                            <br/>
                            <input type="date" name="todate" required/>
                        </div>
                        <br/>
                    </div>
                </fieldset>
                <br/>
                    <div class="formbuttons">
                        <input name= "formsubmit" id="formsubmit" type="submit" value="Potvrdi" />
                    </div>
</form>
</body>
</html>