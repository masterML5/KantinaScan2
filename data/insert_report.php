<?php
     
    require 'connection.php';

    $date=$_POST['fromdate'];
    $todate=$_POST['todate'];
    
    
    $sql = "INSERT INTO  report_input (fromdate, todate) VALUES ('$date', '$todate')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
      header('Location: reports.php');
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    
    }
    $con->close();
?>