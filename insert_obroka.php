<?php
   
    require 'connection.php';

    if (!empty($_POST)){

        $ime_jela = $_POST['ime_jela'];
        $datum = $_POST['datum'];
        $tip = $_POST['tip_obroka'];



        foreach($ime_jela as $item) {
         
            $query = "INSERT INTO vrsta_jela (ime_jela,datum) VALUES ('$item','$datum')";
            $query_run = mysqli_query($con, $query);

      
      }

      
        if ($con->query($query) === TRUE) {
            print "New record created successfully";
            header('Location: insert_obroka.php');
          } else {
            print "Error: " . $query . "<br>" . $con->error;
          
          }
          $con->close();
    }
?>


