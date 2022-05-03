<?php 
session_start();
include('sidemenu_novi_obrok.html');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Unos dnevnog obroka</title>
  </head>
  <body>
    <div class="container">
      
            <div class="card">
                <div class="card-header">
                    <h4>Unos novog obroka</h4>
                </div>
                <div class="card-body">
                <form action="insert_novog_obroka.php" autocomplete="off"   name="forma" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                       <label>Naziv obroka</label>
                       <input type="text" name="naziv_obroka" class="form-control" required>  
                    </div>
                    <div class="form-group">
                        <label for="">Slika obroka</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">Vrsta obroka</label>
                      <select name="vrsta_obroka" id="vrsta_obroka" required>
                      <option value="" selected disabled hidden>Izaberi</option>
                      <option value="hladni_obrok" for="vrsta_obroka" >Hladan obrok</option>
                      <option value="topli_obrok" for="vrsta_obroka" >Topli obrok</option>
                      </select>
                    </div>
                   
                    <div class="form-group actionBtn">
                    <button type="submit"  class="btn btn-success aBtn" >Dodaj</button>
                    <button type="reset"  class="btn btn-danger aBtn" onClick="window.location.reload();">Obrisi</button>
                    </div>
                        </form>
                </div>
                <div  id="status">
                
                    <?php
                    if(isset($_SESSION['status'])){  
                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    }
                    ?>
                
                </div>
            </div>
       
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>                            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="select.js"></script>    
    <script src="status.js"></script>                       
  </body>
</html>